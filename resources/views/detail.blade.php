@extends('layout.main')

@section('content')

<div class="wrapper d-flex align-items-center justify-content-center">

<div class="info p-5 text-center">
    <h2 class="mb-3">{{$movie->title}}</h2>

    <h5 class="mb-5">{{$movie->original_title}}</h5>

    <p>Nationality: {{$movie->nationality}}</p>

    <p>Release: {{$movie->date}}</p>
</div>



</div>

@endsection
