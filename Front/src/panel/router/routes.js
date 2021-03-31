import { createWebHistory, createRouter } from "vue-router";
import Contact from "@/panel/pages/ContactPage.vue";
import Home from "@/panel/pages/HomePage.vue";
import NotFound from "@/panel/pages/NotFoundPage.vue";

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/contact',
        name: 'contact',
        component: Contact,
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'notfound',
        component: NotFound
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;