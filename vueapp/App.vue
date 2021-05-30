<template>
      <component :is="layout">
        <router-view/>
      </component>
</template>

<script>
const DefaultLayout = 'default'
export default {
  name: 'App',
  computed: {
     layout(){
       return (this.$route.meta.layout|| DefaultLayout) + '-layout'
     }
  },
  mounted(){
     console.log(this.$route.meta.layout)
  }
}
</script>

<style lang="scss">

</style>
