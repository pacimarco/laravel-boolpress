<template>
  <div class="container">
    <div class="row">
        <div class="card col-12 mb-4" v-for="(post,index) in posts" :key="index">
            <div class="card-body">
                <h4 class="card-title">{{post.title}}</h4>
                <p class="card-text">{{post.content}}</p>
                <a class="btn btn-primary" href="#">Continue to read</a>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name:'MyMain',
    data() {
        return {
            posts: []
        }
    },
    methods:{
        getPosts(){
            axios.get('/api/posts')
            .then((response) => {
                this.posts = response.data.results;
            });
        }
    },
    mounted(){
        this.getPosts();
    }
}
</script>

<style>

</style>