<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-primary">{{genero}}</h3>
            </div>
        </div>

        <div class="alert alert-danger mt-3" v-if="error">Mil desculpas! Ocorreu um erro ao tentar carregar os filmes do genero {{genero}}. A culpa é toda nossa e em breve tudo estará normal! :)</div>

        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 mb-3 " v-for="movie in movies.results" :key="movie.id">
                <img :src="baseImg + movie.poster_path" class="img-fluid rounded border">
                <h6 class="text-secondary mt-2">{{movie.title}}</h6>
            </div>
        </div>

    </div>
</template>

<style>
    img{
        max-height: 350px;
    }
</style>

<script>
export default {
    props: ['genero', 'url'],
    data(){
        return{
            movies: "",
            baseImg: "https://image.tmdb.org/t/p/w500",
            error:false
        }
    },
    methods: {
        loadMovies(){
            var url = this.url;
            axios.get(url,{})
            .then(res => {
                this.movies = res.data;
            })
            .catch(err => {
                this.error = true;
            })
        }
    },
    created(){
        this.loadMovies()
    }
}
</script>
