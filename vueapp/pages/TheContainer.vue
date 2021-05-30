
<template>
        <div class="container-fluid mt--6">
            <slot/>
        </div>
</template>
<script>
import { Fragment } from 'vue-fragment'
export default {
    components: {
        Fragment
    }
}
</script>
