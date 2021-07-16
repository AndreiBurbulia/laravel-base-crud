@extends('layout.app')

@section('title', 'Add new Comic')


@section('content')


    <h1>Add new Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId"
                value="{{ old('title') }}">
            <small id="helpTitle" class="text-muted">Insert the title of comic</small>
        </div>

        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="series" aria-describedby="helpId"
                value=" {{ old('series') }}">
            <small id="helpseries" class="text-muted">Insert the series of comic</small>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="description"
                aria-describedby="helpId" value="{{ old('description') }}">
            <small id="helpdescription" class="text-muted">Insert the description of comic</small>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="price" aria-describedby="helpId"
                value="{{ old('price') }}">
            <small id="helpprice" class="text-muted">Insert the series of comic</small>
        </div>
        <div class="form-group">
            <label for="poster">Poster</label>
            <input type="text" name="poster" id="poster" class="form-control" placeholder="poster" aria-describedby="helpId"
                value="{{ old('poster') }}">
            <small id="helpposter" class="text-muted">Insert the series of comic</small>
        </div>

        <div class="form-group">
            <label for="on_sale_date">On Sale Date</label>
            <input type="text" name="on_sale_date" id="on_sale_date" class="form-control" placeholder="on_sale_date"
                aria-describedby="helpId" value="{{ old('on_sale_date') }}">
            <small id="helpon_sale_date" class="text-muted">Insert the series of comic</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection
