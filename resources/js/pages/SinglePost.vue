<template>
  <h2>singolo post</h2>
</template>

<script>
import Axios from 'axios';

export default {
name:'SinglePost',
methods:{
    getSinglePost(){
        const slug = this.$route.params.slug;
        axios.get('/api/posts/' + slug )
        .then((response)=>{
            this.post = response.data;
        });
    }
},
    mounted(){
        this.getSinglePost();
    }
}
</script>

<style>

</style>