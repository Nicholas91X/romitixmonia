/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import App from "./App.vue";

import router from "./router";

import { library } from "@fortawesome/fontawesome-svg-core";
import { faCoffee } from "@fortawesome/free-solid-svg-icons";
import {
    faFacebook,
    faTwitter,
    faYoutube,
    faSpotify,
    faInstagram,
    faTiktok,
} from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { faMobileScreen } from "@fortawesome/free-solid-svg-icons";
import { faEnvelope } from "@fortawesome/free-solid-svg-icons";
import { faBars } from "@fortawesome/free-solid-svg-icons";

library.add(faCoffee);
library.add(faFacebook);
library.add(faTwitter);
library.add(faYoutube);
library.add(faSpotify);
library.add(faInstagram);
library.add(faTiktok);
library.add(faMobileScreen);
library.add(faEnvelope);
library.add(faBars);

Vue.component("font-awesome-icon", FontAwesomeIcon);

Vue.config.productionTip = false;

const app = new Vue({
    el: "#app",
    render: (h) => h(App),
    router,
});

let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let miniSlides = document.getElementsByClassName("mini-img");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        miniSlides[i].style.border = "none";
        miniSlides[i].style.opacity = 0.25;
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    miniSlides[slideIndex - 1].style.border = "1px solid white";
    miniSlides[slideIndex - 1].style.opacity = 1;
    setTimeout(showSlides, 5000); // Change image every 5 seconds
    console.log(slideIndex);
}
