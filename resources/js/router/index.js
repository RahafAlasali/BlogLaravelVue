import { createRouter, createWebHashHistory } from "vue-router";
import HomeView from "../../components/home.vue";
import AboutView from "../../components/about.vue";


const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView
  },
  {
    path: "/about",
    name: "about",
    component: AboutView
  }
];

const router = new createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
