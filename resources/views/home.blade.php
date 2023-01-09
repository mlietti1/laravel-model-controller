@extends('layout.main')

@section('content')

<main>
    <h1>HOME</h1>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
    @endforeach
</main>

@endsection
