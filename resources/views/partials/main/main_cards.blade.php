<section class="container-fluid">
    <div class="row d-flex">
        @foreach ($movies as $movie)
            <div class="card col-2" style="width: 18rem;">
                <img class="card-img-top" src="{{$movie->cover}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
</section>