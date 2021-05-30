require('./bootstrap');


import store from './store'
window.Vue = require('vue');


Vue.component('tag-list', require('./src/Tags.vue').default);

// Vue.prototype.$apiAdress = 'http://siplonline.borg'
// Vue.config.performance = true


const app =new Vue({
 el:'#app',
  store
})
// require('../../vueapp/main.js');
