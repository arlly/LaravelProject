
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import VueRouter from 'vue-router'

require('./bootstrap')

Vue.use(VueRouter)

Vue.component('navbar', require('./components/Layouts/Navbar.vue'))


const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: require('./components/Articles/Index.vue') },
        { path: '/about', component: require('./components/About.vue') },
    ]
})

const app = new Vue({
    router,
    el: '#app'
})