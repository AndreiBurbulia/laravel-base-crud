@extends('layout.app')

@section('title', 'Comics Section')


@section('content')
    <a href="{{ route('homepage') }}">homepage</a>
    <a href="{{ route('comics.create') }}">add new comic</a>
    <h1>comics section</h1>

    @foreach ($comics as $comic)
        <h1>{{ $comic->title }}</h1>
    @endforeach

@endsection
