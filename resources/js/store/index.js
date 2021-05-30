import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

const state = {
    name:'chandan Mishra',
    isVisible: true,
    tags:[]
}

const mutations ={
    toggleName(state){
        state.isVisible= !state.isVisible
    },
    Tags(state){
        axios.get('api/v1/tags')
        .then(res=>{
            state.tags=res.data.data;
        })
    }
}

const getters = {
    getTags: state =>state.tags
}
export default new Vuex.Store({
    state,
    mutations,
    getters
  })
