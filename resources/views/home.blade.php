@extends('layout.main')

@section('content')

<main>
    <div class="container">
        <h1>My Movie Collection</h1>
        <div class="row row-cols-4 justify-content-center g-2">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">{{$movie->title}}</h5>
                                <p class="card-text">Vote: {{$movie->vote}}</p>

                            </div>
                            <div><a href="{{route('details', $movie->id)}}" class="btn btn-secondary ">See more</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
