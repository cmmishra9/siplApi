<template>
     <div>
         <Navbar/>
           <div class="main-content" id="panel">
            <Header/>
            <pageHeader/>
            <slot/>
          </div>
     </div>
</template>

<script>
import Navbar from '../components/Navbar'
import Header from '../components/Header'
import pageHeader from '../components/pageHeader'

export default {
  components:{
    Navbar,
    Header,
    pageHeader
  }
}
</script>
