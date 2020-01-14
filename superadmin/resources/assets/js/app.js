require('./bootstrap');
import VueRouter from 'vue-router';
import Routes from './routes';
window.Vue = require('vue');

Vue.use(VueRouter);

const router = new VueRouter({
    routes: Routes,
    mode: 'history'
});


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router: router
});
