import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import PageContact from './pages/PageContact.vue';
import PageAboutus from './pages/PageAboutus.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/contact",
            name: "contact",
            component: PageContact
        },
        {
            path: "/aboutus",
            name: "aboutus",
            component: PageAboutus
        }
    ]
});