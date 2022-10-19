<template>
  <div class="container">
    <div class="row">
        <SinglePost v-for="(post,index) in posts" :key="index" :post="post"/>
    </div>
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item" :class="(currentPage==1?'disabled':'')"><a class="page-link" href="#" @click.prevent="getPosts(currentPage - 1)">Previous</a></li>
            <li class="page-item disabled"><span class="page-link">{{currentPage}}/{{lastPage}}</span></li>
            <li class="page-item" :class="(currentPage==lastPage)?'disabled':''"><a class="page-link" href="#" @click.prevent="getPosts(currentPage + 1)">Next</a></li>
        </ul>
    </nav>
  </div>
</template>

<script>
import SinglePost from '../components/SinglePost.vue'
export default {
    name:'PostsPage',
    components:{
      SinglePost
    },
    data() {
        return {
            posts: [],
            currentPage: 1,
            lastPage: null

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
                console.log(response);
                this.posts = response.data.results.data;
                this.currentPage = response.data.results.current_page;
                this.lastPage = response.data.results.last_page;
            });
        },
        
    },
    mounted(){
        this.getPosts(1);
    }
}
</script>

<style>

</style>