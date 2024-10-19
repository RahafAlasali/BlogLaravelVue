import Vue from "vue";
import VueRouter from "vue-router";
import Dashboard from "../components/dashboard.vue";
import Post from "../views/Post.vue";
import Layout from "../layout/dashboard.vue";
import LayoutHome from "../layout/home.vue";
import Home from "../views/home.vue";
import login from "../views/Login.vue";
import Register from "../views/Register.vue"
import showPost from "../views/showPost.vue"

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: LayoutHome,
        children: [
            {
                path: '',
                name: 'home',
                component: Home,
            },
            {
                path: '/post/:id',
                name: 'showPost',
                component: showPost,
            }

        ]

    },

    {
        path: '/dashboard',
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
    },
    {
        path: "/login",
        name: "login",
        component: login,
    },
    {
        path: "/register",
        name: "register",
        component: Register,
    },
];

const router = new VueRouter({
    mode: 'history',
    routes
});


export default router;