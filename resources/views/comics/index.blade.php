@extends('layout.app')

@section('title', 'Comics Section')


@section('content')

    <div class="comics">
        <a href="{{ route('homepage') }}">homepage</a>
        <a href="{{ route('comics.create') }}">add new comic</a>

        <h1>Comics section</h1>
        <div class="slot_container">

            @foreach ($comics as $comic)
                <a href="{{ route('comics.show', $comic->id) }}">
                    <div class="slot">
                        <img src="{{ $comic->poster }}" alt="">
                        <h2>{{ $comic->title }}</h2>
                    </div>
                </a>
            @endforeach

        </div>

    </div>

@endsection
