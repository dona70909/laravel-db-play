<template>
    <section class="container-fluid">
        <div class="row d-flex movie-card-wrapper">
            <div  v-for ="(movie,index) in movies" :key="index" class="card col-2">
                <img class="card-img-top" :src="movie.cover" alt="Card image cap">
                <div class="card-body">
                    
                    <p class="card-text">{{movie.title}}</p>
                    <h5 class="card-title">Vote: {{ movie.vote}}</h5>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['movies'],

        mounted() {
            
            console.log('Component mounted.')
        }
    }
</script>
