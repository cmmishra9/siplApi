import Vue from 'vue'
import App from './App'
import router from './router'
import store from './store'
import { Plugin } from 'vue-fragment'
import Default from './layouts/default.vue'
import Auth from './layouts/auth.vue'

Vue.component('default-layout', Default);
Vue.component('auth-layout', Auth);

Vue.prototype.$apiAdress = 'http://siplonline.borg'
Vue.config.performance = true
Vue.use(Plugin);
//  Vue.use(CoreuiVue)

new Vue({
  el: '#app',
  router,
  store,  
//   icons,
  template: '<App/>',
  components: {
    App
  },
})