import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import PageContact from './pages/PageContact.vue';
import PageAboutus from './pages/PageAboutus.vue';
import PageHome from './pages/PageHome.vue';
import PostsPage from './pages/PostsPage.vue';
import ErrorNotFound from './pages/ErrorNotFound';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: PageHome
        },
        {
            path: "/contact",
            name: "contact",
            component: PageContact
        },
        {
            path: "/aboutus",
            name: "aboutus",
            component: PageAboutus
        },
        {
            path: "/blog",
            name: "blog",
            component: PostsPage
        },
        {
            path: "/blog/:slug",
            name: "single-post",
            component: SinglePost
        },
        {
            path: "/*",
            name: "not-found",
            component: ErrorNotFound
        },
    ]
        
});
export default router;
    