<template>
    <section class="container-fluid">
        <div class="row d-flex movie-card-wrapper">
            <div  v-for ="(movie,index) in movies" :key="index" class="card col-2">
                <img class="card-img-top" :src="movie.cover" alt="Card image cap">
                <div class="card-body">
                    
                    <p class="card-text">{{movie.title}}</p>
                    <h5 class="card-title">Vote: {{ movie.vote}}</h5>
                    <p class="text-red-bd d-inline-block me-1">Vote:</p>
                    <i  v-for="(star,index) in starVote(movie.vote)" :key="index + 'full'" class="bi bi-star-fill"></i>
                    <i  v-for="(starEmpty,index) in emptyStars(movie.vote)" :key="index + 'empty'" class="bi bi-star"></i>   
                    
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
        },

        methods: {
            starVote(number){
                if(number > 5){
                    number = 5;
                } else {
                    number = Math.round(number);
                }

                return number;
            },

            emptyStars(number){ 
                if(number > 5){
                    number = 5;
                    number = 5 - number;
                } else {
                    number = Math.round(number);
                    number = 5 - number;
                }
                return number;
            },
        },
    }
</script>
