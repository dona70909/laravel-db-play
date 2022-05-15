<template>
    <section class="container-fluid">
        <div class="row p-4">
            <div class="col-12 d-flex align-items-baseline">
                <h1 class="me-5">The movie DB</h1>
                <a class="text-dark text-decoration-none" :href="home"> Home </a>
              
            </div>
        </div>
    </section>
</template>


<script>
    export default {
        name:"header-nav-component",
        data: {
            home: "{{route('guest.home.index')}}"
        },
        mounted() {
            
            console.log("mounted");
        }
    }
</script>

