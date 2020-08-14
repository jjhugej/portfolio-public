import VueRouter from "vue-router";

let routes = [
    {
        path: "/",
        redirect: "/skills"
    },
    {
        path: "/skills",
        component: require("./views/Skills.vue").default
    },
    {
        path: "/projects",
        component: require("./views/Projects.vue").default
    },
    {
        path: "/resume",
        component: require("./views/Resume.vue").default
    },
    {
        path: "/contact",
        component: require("./views/Contact.vue").default
    }
];
export default new VueRouter({
    routes,
    linkActiveClass: "is-active"
});
