import Vue from "vue";

import App from "./App.vue";

const chat = new Vue({
    el: "#chat-app-container",
    render: h => h(App)
});
