<template>
  <div class="container">
    <div class="row">
        <div class="card col-12 mb-4" v-for="(post,index) in posts" :key="index">
            <div class="card-body">
                <h4 class="card-title">{{post.title}}</h4>
                <p class="card-text">{{truncateText(post.content,60)}}</p>
                <p class="card-text">{{post.category?post.category.name:'-'}}</p>
                <a class="btn btn-primary" href="#">Continue to read</a>
            </div>
        </div>
    </div>
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item" :class="(currentPage==1?'disabled':'')"><a class="page-link" href="#" @click.prevent="getPosts(currentPage - 1)">Previous</a></li>
            <li class="page-item disabled"><span class="page-link" href="#">{{currentPage}}/{{lastPage}}</span></li>
            <li class="page-item" :class="(currentPage==lastPage)?'disabled':''"><a class="page-link" href="#" @click.prevent="getPosts(currentPage + 1)">Next</a></li>
        </ul>
    </nav>
  </div>
</template>

<script>
export default {
    name:'MyMain',
    data() {
        return {
            posts: [],
            currentPage: 1,
            lastPage: null,

        }
    },
    methods:{
        getPosts(page){
            axios.get('/api/posts',{
                params:{
                    page:page
                }
            })
            .then((response) => {
                this.posts = response.data.results.data;
                this.currentPage = response.data.results.current_page;
                this.lastPage = response.data.results.last_page;
            });
        },
        truncateText(text, maxLength){
            return text.substring(0, maxLength) + '...';
        }
    },
    mounted(){
        this.getPosts(1);
    }
}
</script>

<style>

</style>