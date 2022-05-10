// resources/js/router.js

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import RMxtr from "./pages/RMxtr";
import LunigianaCalling from "./pages/LunigianaCalling";
import CoverMonia from "./pages/CoverMonia";
import Team from "./pages/Team";
import Brani from "./pages/Brani";
import Foto from "./pages/Foto";
import Contatti from "./pages/Contatti";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/rmxtr",
            name: "rmxtr",
            component: RMxtr,
        },
        {
            path: "/lunigiana-calling",
            name: "lunigiana-calling",
            component: LunigianaCalling,
        },
        {
            path: "/cover-monia",
            name: "cover-monia",
            component: CoverMonia,
        },
        {
            path: "/team",
            name: "team",
            component: Team,
        },
        {
            path: "/brani",
            name: "brani",
            component: Brani,
        },
        {
            path: "/foto",
            name: "foto",
            component: Foto,
        },
        {
            path: "/contatti",
            name: "contatti",
            component: Contatti,
        },
    ],
});

export default router;
