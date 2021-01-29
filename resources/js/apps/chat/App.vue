<template>
    <div id="chat-app">
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
                    <div class="p-3 message">
                        <div class="rounded px-4 py-2 child me">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Soluta similique nam,
                                repudiandae saepe odit laudantium cum aliquid
                                quaerat vitae quam in accusamus velit est
                                laborum odio rerum hic aliquam non?
                            </p>
                        </div>
                    </div>
                    <div class="p-3 message">
                        <div class="rounded px-4 py-2 child you">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Soluta similique nam,
                                repudiandae saepe odit laudantium cum aliquid
                                quaerat vitae quam in accusamus velit est
                                laborum odio rerum hic aliquam non?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pane-footer">
                    <form class="d-flex">
                        <input
                            type="text"
                            class="form-control form-control-sm m-1"
                            style="width: 80%;"
                        />
                        <button class="btn btn-info btn-primary m-1">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isHovering: false,
            showPane: false
        };
    },
    methods: {
        togglePane() {
            this.showPane = !this.showPane;
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
