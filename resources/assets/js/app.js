
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./../../../node_modules/simplelightbox/dist/simple-lightbox.min');
require('./../../../node_modules/bootstrap-slider/dist/bootstrap-slider.min');
require('./jquery.formatCurrency-1.4.0.min');

require('./../../../node_modules/vue-bootstrap-slider/dist/vue-bootstrap-slider');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('calculate', require('./components/calculate/Calculate.vue'));

const app = new Vue({
    el: '#app'
});

require('./home');