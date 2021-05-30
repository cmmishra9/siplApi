import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

const state = {
    name:'chandan Mishra',
    isVisible: true
}

const mutations ={
    toggleName(state){
        state.isVisible= !state.isVisible
    }
}

export default new Vuex.Store({
    state,
    mutations
  })
