<template>

    <div>
        <PostList/>
    </div>

</template>

<script>
import PostList from '../components/PostList.vue'
export default {
    name:"App",

    data(){
        return{
            posts:[]
        }
    },

    components:{
        PostList,
    },
}
</script>

<style>

</style>