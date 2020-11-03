require('./bootstrap');
import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import {routes} from './routes';

Vue.use(Vuex);
Vue.use(VueRouter);
Vue.component('home', require('./components/Home.vue').default);

const router = new VueRouter({
    routes,
    mode: 'history'
});
const app = new Vue({
    el: "#app",
    router,
    mounted()
    {
    }
});