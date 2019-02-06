<template>
<div class="card">
    <div class="card-header">En que estas pensando ahora?</div>

    <div class="card-body">
    
    <form action="" @submit.prevent="NewThought()" enctype="multipart/form-data">
        <div class="form-group">
            <label for="thought">Ahora estoy pensando en:</label>
            <input type="text" class="form-control" name="description" v-model="description">
            <span v-if="errors.description" class="text-danger">{{ errors.description }}</span>
            <input type="file" name="file" class="form-control" id="file">
        </div>
        <button type="submit" class="btn btn-primary">
            Enviar pensamiento
        </button>
    </form>
    </div>
</div>
</template>

<script>
    export default {
        data(){
            return{
                description: '',
                errors: [],
                file: null,
                errors:[]
            }
        },
        methods:{
            NewThought(){
                let data = new FormData();
                data.append('file', document.getElementById('file').files[0]);
                data.append('description', this.description);
                axios.post('/thoughts', data)
                .then(response => {
                    const thought = response.data;
                    this.$emit('new', thought);
                    this.description = '';
                    this.errors = [];
                    this.file = null;
                }).catch(error => {
                    console.log(error.response);
                    this.errors = error.response.data.errors;
                });
                
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>