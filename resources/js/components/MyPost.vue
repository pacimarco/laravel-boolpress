<template>
  <div class="card col-12 mb-4" >
            <div class="card-body">
                <h4 class="card-title">{{post.title}}</h4>
                <p class="card-text">{{truncateText(post.content,60)}}</p>
                <p class="card-text">{{post.category?post.category.name:'-'}}</p>
                <router-link :to="{name:'single-post', params:{slug: post.slug}}" class="btn btn-primary">Continue to read</router-link>
            </div>
</div>
</template>

<script>
export default {
    name: 'MyPost',
    props:['post'],
    methods:{
        truncateText(text, maxLength){
            return text.substring(0, maxLength) + '...';
        }
    }
}
</script>

<style>

</style>