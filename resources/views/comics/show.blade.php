@extends('layout.app')

@section('content')
    <div class="slot">
        <img src="{{ $comic->poster }}" alt="">
        <h2>{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
    </div>
@endsection
