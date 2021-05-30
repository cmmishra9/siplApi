import Vue from 'vue'
import Router from 'vue-router'
import {
  Login,
  Dashboard,
  TheContainer,
  Settings
} from '../pages'


Vue.use(Router)

let router = new Router({
  mode: 'history',
  scrollBehavior: () => ({ y: 0 }),
  routes: configRoutes()
})
export default router

function configRoutes(){
  return [
    {
      path: '/',
      redirect: '/dashboard',
      name:'Home',
      component: Dashboard,
      meta:{
          layout:'default'
      }

    },
    {
      path: '/login',
      name:'Login',
      meta: {layout:'auth'},
      component: Login
    },
    {
        path: '/settings',
        name: 'Settings',
        component:Settings
    }
  ];
}
