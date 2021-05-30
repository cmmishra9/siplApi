<template>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-header bg-transparent">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="mb-0">All Tags</h3>
                            </div>
                            <div class="col-lg-4">
                        <form>
                            <div class="form-group mb-0">
                                <input type="text" class = 'form-control form-control-sm'  placeholder='Search Tags'/>
                            </div>
                        </form>
                    </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div>
                                <table class="table table-hover align-items-center">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr v-for="(tag) in tags" :key="`tag-${tag.id}`">
                                            <th scope="row">{{tag.tag_name}}</th>

                                            <td>
                                                <span v-if="tag.status" class="badge badge-pill badge-lg badge-success">Active</span>
                                                <span v-else class="badge badge-pill badge-lg badge-danger">Disabled</span>
                                            </td>
                                            <td><p>{{tag.created_at}}</p></td>
                                            <td class="text-center">
                                                <div class='d-inline-block dform'>
                                                    <button class="btn btn-info btn-sm m-1" v-bind:data-tag="tag.id" data-toggle="tooltip" @click="edit" data-placement="top" title="Edit Tag details">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </button>
                                                    <button type="button" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete Tag">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Modal
                v-show="isEdit"
                @close="closeModal"
                >
                <template v-slot:header>
                    Edit Tags
                </template>

                <template v-slot:body>
                    Edit the Tags
                </template>

                <template v-slot:footer>
                    Save
                </template>
            </Modal>
    </div>
</template>
<script>
import Modal from './Modal/Modal.vue'
export default {
    name: 'Tags',
    components:{
        Modal,
    },
    data(){
        return {
            tags:[],
            isEdit:false,
            isDelete:false
        }
    },
    mounted(){
        this.loadTags()
    },

    methods:{
        loadTags(){
            axios.get('api/v1/tags')
            .then(res=>{
                this.tags=res.data.data;
            })
        },
        edit(){
            this.isEdit = true;
        },
        delete(){
            this.isDelete = true;
        },
        closeModal(){
            this.isEdit=false;
            this.isDelete=false;
        }
    }
}
</script>
