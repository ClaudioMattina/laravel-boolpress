<template>

    <div>
        <Post v-for="(post,index) in posts" :key='index'/>
    </div>

</template>

<script>
import Post from './Post.vue'
export default {
    name:"PostList",

    components:{
        Post,
    },

    data(){
        return{
            posts:[],
        }
    },

    methods:{
        getPosts(){
            axios.get('http://localhost:8000/api/test')
            .then((results)=>{
                console.log(results.data);
                this.posts = results.data.data;
                
            })
            .catch((error)=>{
                console.warn(error);
            });
        }
    },

    created(){
        this.getPosts();
    }

}
</script>

<style>

</style>