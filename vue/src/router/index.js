import Vue from "vue";
import VueRouter from "vue-router";
import Dashboard from "../components/dashboard.vue";
import Post from "../views/Product.vue";
import Layout from "../layout/dashboard.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: '/dashboard',
        name: 'home',
        component: Layout,
        children: [
            {
                path: "",
                name: "dashboard",
                component: Dashboard,

            },
            {
                path: "post",
                name: "Post",
                component: Post,

            }
        ]
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});


export default router;