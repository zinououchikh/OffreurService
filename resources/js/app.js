require('./bootstrap');
window.Vue = require('vue');

import Vuetify from '../plugins/vuetify';
import VueRouter from 'vue-router';
import {routes} from './routes';
import MainApp from './components/MainApp.vue';


const router = new VueRouter({
    routes,
    mode: 'history'
});

Vue.use(VueRouter);

Vue.component('main-app', require('./components/MainApp.vue').default);


const app = new Vue({
    vuetify : Vuetify,
    el: '#app',
    router,
    components: {
        MainApp
    }
});
