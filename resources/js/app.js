
require('./bootstrap');
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'bootstrap/dist/css/bootstrap.min.css'
window.Vue = require('vue');

/* vue Components */
Vue.component('cards-component', require('./components/Cards.vue').default);
Vue.component('header-nav-component', require('./components/HeaderNav.vue').default);



const app = new Vue({
    el: '#app',
});
