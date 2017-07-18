
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Admin LTE
 */

require('./../../../node_modules/admin-lte-sass/build/js/app.min');
require('./../../../node_modules/admin-lte-sass/plugins/select2/select2.min');
require('./../../../node_modules/admin-lte-sass/plugins/datepicker/bootstrap-datepicker');
require('./../../../node_modules/datatables/media/js/jquery.dataTables.min');
require('./../../../node_modules/admin-lte-sass/plugins/datatables/dataTables.bootstrap');
/*
 * Sweet Alert
 */

require('./../../../node_modules/sweetalert/dist/sweetalert.min');

require('./custom');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
