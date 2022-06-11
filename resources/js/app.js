

window.Vue = require("vue").default;

import Vue from "vue";

import VueRouter from 'vue-router';

import axios from 'axios';

try {
    require("bootstrap");
} catch (e) {}

window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

Vue.component("navigation", require("./components/Navigation.vue").default);

Vue.productionTips = false;

Vue.use(VueRouter);

import routes from './router'

const app = new Vue({
    el: "#app",
    router : new VueRouter(routes),
});
