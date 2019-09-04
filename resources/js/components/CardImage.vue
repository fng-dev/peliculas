<template>
  <div class="card text-white" @click="goto(link)">
    <img :src="url" class="card-img"/>
  </div>
</template>

<style>
    .card img {
        filter: grayscale(80%);
        cursor: pointer;
    }

    .card img:hover {
        filter: grayscale(0%);
    }
</style>

<script>
export default {
    props: ['url', 'link'],
    methods:{
        goto(link){
            location.href = link;
        }
    }
}
</script>
