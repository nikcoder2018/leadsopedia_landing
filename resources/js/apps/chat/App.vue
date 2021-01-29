<template>
    <div id="chat-app" class="d-none">
        <div
            id="toggle"
            class="main shadow border slideable"
            @mouseover="isHovering = true"
            @mouseleave="isHovering = false"
            :class="{ 'slide-down': showPane }"
            @click.prevent="togglePane()"
        >
            <div class="d-flex">
                <h6 class="text-white mt-2 align-self-center mr-auto">
                    Chat Us!
                </h6>
                <div class="ml-auto align-self-center">
                    <i class="fas fa-comment text-white" v-if="!isHovering"></i>
                    <i class="fas fa-comment-dots text-white" v-else></i>
                </div>
            </div>
        </div>
        <div class="pane shadow" :class="{ 'hidden-on-right': !showPane }">
            <div class="pane-wrapper h-100">
                <div class="pane-header border-bottom">
                    <h6 class="align-self-center mb-0 ml-3">
                        Welcome!
                    </h6>
                    <div
                        class="ml-auto align-self-center mr-3 clickable"
                        @click.prevent="togglePane()"
                    >
                        <i class="fas fa-times" style="color: black;"></i>
                    </div>
                </div>
                <div class="pane-body">
                    <div class="p-3" v-if="echo === null">
                        <div class="rounded px-4 py-2 you">
                            <form @submit.prevent="createConversation()">
                                <div class="form-group">
                                    <label for="name">Name (optional):</label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control form-control-sm"
                                        placeholder="John Doe"
                                        v-model="name"
                                        :disabled="processing"
                                        :class="{ disabled: processing }"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email (optional):</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control form-control-sm"
                                        placeholder="email@example.com"
                                        v-model="email"
                                        :disabled="processing"
                                        :class="{ disabled: processing }"
                                    />
                                </div>
                                <div class="form-group">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-sm"
                                        :disabled="processing"
                                        :class="{ disabled: processing }"
                                    >
                                        {{
                                            processing
                                                ? "Please Wait..."
                                                : "Submit"
                                        }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <template v-if="echo !== null">
                        <div
                            class="px-3 py-1 message"
                            v-for="(chat, index) in chats"
                            :key="index"
                        >
                            <div
                                class="rounded px-2 py-1 child"
                                :class="{
                                    me: chat.admin_id === null,
                                    you: chat.admin_id !== null
                                }"
                            >
                                <p class="mb-0">
                                    {{ chat.message }}
                                </p>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="pane-footer" v-if="echo !== null">
                    <form class="d-flex">
                        <input
                            type="text"
                            class="form-control form-control-sm m-1"
                            style="width: 80%;"
                            v-model="message"
                            @keyup.enter.prevent="sendChat()"
                        />
                        <button
                            class="btn btn-info btn-primary m-1"
                            @click.prevent="sendChat()"
                        >
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Echo from "laravel-echo";
import axios from "axios";
import toastr from "toastr";
import "toastr/toastr.scss";
import Pusher from "pusher-js";

axios.defaults.headers.common["Accept"] = "application/json";

export default {
    data() {
        return {
            isHovering: false,
            showPane: false,
            echo: null,
            conversation: null,
            name: "",
            email: "",
            processing: false,
            message: "",
            chats: [{ message: "Welcome!", admin_id: -1 }],
            sending: false
        };
    },
    methods: {
        async refreshChats() {
            const adminURL = process.env.MIX_ADMIN_URL;
            const id = this.conversation.id;
            const token = this.conversation.token;
            try {
                const { data } = await axios.get(
                    `${adminURL}/api/conversations/${id}/chats`,
                    {
                        headers: {
                            "x-conversation-token": token
                        }
                    }
                );
                const defaultChat = this.chats[0];
                this.chats = [defaultChat, ...data];
                this.scrollToBottom();
            } catch (error) {
                console.log(error);
            }
        },
        async sendChat() {
            if (this.sending) {
                return;
            }
            this.sending = true;
            const message = this.message;
            this.message = "";
            const adminURL = process.env.MIX_ADMIN_URL;
            const id = this.conversation.id;
            const token = this.conversation.token;
            try {
                this.chats.push({
                    message,
                    admin_id: null
                });
                await axios.post(
                    `${adminURL}/api/conversations/${id}/chats`,
                    {
                        message
                    },
                    {
                        headers: {
                            "x-conversation-token": token
                        }
                    }
                );
            } catch (error) {
                console.log(error);
            } finally {
                this.sending = false;
                this.scrollToBottom();
            }
        },
        async createConversation() {
            this.processing = true;
            const adminURL = process.env.MIX_ADMIN_URL;
            const { name, email } = this;
            try {
                const { data } = await axios.post(
                    `${adminURL}/api/conversations`,
                    {
                        name,
                        email
                    }
                );
                this.conversation = data;
                this.registerEcho(data.token);
                this.refreshChats();
            } catch (error) {
                console.log(error);
                toastr.error(
                    "Unable to establish connection. Please try again later."
                );
            } finally {
                this.processing = false;
            }
        },
        togglePane() {
            this.showPane = !this.showPane;
        },
        registerEcho(token) {
            const echo = new Echo({
                broadcaster: "pusher",
                key: process.env.MIX_PUSHER_APP_KEY,
                cluster: process.env.MIX_PUSHER_APP_CLUSTER,
                forceTLS: true,
                authEndpoint: process.env.MIX_ADMIN_AUTH_URL
            });

            this.echo = echo;

            this.echo.connector.pusher.config.auth.headers[
                "x-conversation-token"
            ] = token;

            this.echo.connector.pusher.config.auth.headers["Accept"] =
                "application/json";

            if (this.conversation.name !== null) {
                const chat = this.chats[0];
                chat.message = `Welcome, ${this.conversation.name}.`;
                this.chats.splice(0, 1, chat);
            }

            echo.channel(`conversations.${this.conversation.id}`).listen(
                "ChatSent",
                event => {
                    this.chats.push(event.chat);
                    this.scrollToBottom();
                }
            );
        },
        scrollToBottom() {
            const paneBody = document.querySelector(".pane-body");
            paneBody.scrollTop = paneBody.scrollHeight;
            setTimeout(() => {
                paneBody.scrollTop = paneBody.scrollHeight;
            }, 500);
            setTimeout(() => {
                paneBody.scrollTop = paneBody.scrollHeight;
            }, 1000);
        }
    }
};
</script>

<style scoped>
.btn {
    border-radius: 0;
}

.main {
    position: fixed;
    right: 1.5rem;
    bottom: 0;
    background: #1752e8;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    padding: 0.3rem 1rem;
    width: 300px;
}

.pane-wrapper {
    position: relative;
}

.pane {
    position: fixed;
    right: 1.5rem;
    width: 178px;
    height: 95vh;
    top: 2.5vh;
    width: 300px;
    z-index: 9999;
    border-radius: 0.5rem;
    transition: 0.5s linear;
    background-color: #f6f6f7;
}

.pane-header {
    background-color: #ffffff;
    height: 3rem;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    display: flex;
}

.pane-body {
    overflow-y: scroll;
    overflow-x: hidden;
    overscroll-behavior: contain;
    height: 83%;
    position: relative;
}

.pane-footer {
    width: 100%;
    position: absolute;
    bottom: 0;
}

.child {
    position: relative;
    z-index: -1;
}

.hidden-on-right {
    right: -300px;
}

.main:hover {
    cursor: pointer;
}

.slideable {
    transition: 0.3s linear;
}

.slide-down {
    transform: translateY(100%);
}

.clickable:hover {
    cursor: pointer;
}

.me {
    background-color: #2a5de9;
    color: #fff;
}

.me > p {
    color: #fff;
}

.you {
    background-color: #fff;
    color: #637282;
}

.you > p {
    color: #637282;
}
</style>
