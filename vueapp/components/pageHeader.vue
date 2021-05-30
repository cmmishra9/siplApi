<template>
    <div class="header bg-primary pb-6" v-if="error">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0" v-if="error" >error</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    
                </div>
                <div class="col-lg-12 col-12">
                    
                        <div class="alert alert-danger mt-4" v-if="error">error</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</template>
<script>
export default {
    name:'pageHeader',
    data(){
        return {
            error:false
        }
    }
}
</script>