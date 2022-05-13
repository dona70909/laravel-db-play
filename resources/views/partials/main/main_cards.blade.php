<section class="container-fluid">
    <div class="row d-flex movie-card-wrapper">
        @foreach ($movies as $movie)
            <div class="card col-2">
                <img class="card-img-top" src="{{$movie->cover}}" alt="Card image cap">
                <div class="card-body">
                    
                    <p class="card-text">{{$movie->title}}</p>
                    <h5 class="card-title">Vote: {{$movie->vote}}</h5>
                </div>
            </div>
        @endforeach
    </div>
</section>