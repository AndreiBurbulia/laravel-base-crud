@extends('layout.app')

@section('content')
    <div class="slot">
        <img src="{{ $comic->poster }}" alt="">
        <h2>{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>

        <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        <br>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>
        </form>

    </div>
@endsection
