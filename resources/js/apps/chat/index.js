import Vue from "vue";

import App from "./App.vue";

import Echo from "laravel-echo";

window.Pusher = require("pusher-js");

window.Echo = new Echo({
    broadcaster: "pusher",
    key: process.env.MIX_ABLY_PUBLIC_KEY,
    wsHost: "realtime-pusher.ably.io",
    wsPort: 443,
    disableStats: true,
    encrypted: true
});

const chat = new Vue({
    el: "#chat-app-container",
    render: h => h(App)
});
