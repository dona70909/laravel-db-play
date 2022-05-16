<template>
    <div>
        <section class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form  name="/form" action="store-form" method="post">
                        <!-- content  -->
                        <input type="hidden" name="_token" :value="csrf">
                        <h1 class="mb-2">Insert your content</h1>
                        <div class="box-input-title  mb-2">
                            <label for="input-title">Insert title</label>
                            <input id="input-title" type="text" name="title" placeholder="Title">
                        </div>
                    
                        <div class="box-input-director  mb-2">
                            <label for="input-director">Genre</label>
                            <input id="input-director" type="text" name="genre" placeholder="Genre">
                        </div>
                        <div class=" mb-2">
                            <label for="input-type">Language</label>
                            <input id="input-content-type" type="text" name="language">
                        </div>

                        <div class=" mb-2">
                            <label for="input-img-cover">Vote</label>
                            <input id="input-img-cover" type="number" name="vote" placeholder="vote">
                        </div>

                        <div class=" mb-2">
                            <label for="input-type">Cover link</label>
                            <input id="input-content-type" type="text" name="cover">
                        </div>

                        <button type="submit">Load Movie!</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</template>


<script>
    export default {

        
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }),  

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
        }
    }
</script>
