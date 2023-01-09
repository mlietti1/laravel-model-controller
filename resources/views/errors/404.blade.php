@extends('layout.main')

@section('content')

<div class="wrapper d-flex align-items-center justify-content-center">

    <h3>
        {{ $exception->getMessage() }}
    </h3>

</div>


@endsection
