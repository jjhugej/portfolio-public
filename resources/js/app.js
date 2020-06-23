require("./bootstrap");
import router from "./routes";
import EventBus from "./event-bus";
window.EventBus = EventBus;

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split("/")
            .pop()
            .split(".")[0],
        files(key).default
    )
);

const app = new Vue({
    el: "#app",
    data: { loading: false },
    router
});

router.beforeEach((to, from, next) => {
    app.loading = true;
    next();
});

router.afterEach((to, from, next) => {
    setTimeout(() => (app.loading = false), 500); // timeout for demo purposes
});
