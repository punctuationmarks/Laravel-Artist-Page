@extends('layout')


@section('content')

<div class="container m1 p1">

    <h1>Update</h1>


    <small class="p-2 m-2">Created: {{ $art->created_at }} || Updated: {{ $art -> updated_at }}</small>

</div>

<form method="POST" action="/arts/{{ $art->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title" class="label">
            Title
        </label>
        <div class="control">
            <input type="text" class="input {{ $errors->has('title') ? 'danger' : ''}}" name="title" id="title" value="{{ old('title') }}">

            @if($errors->has('title'))
            <p class="danger">{{ $errors->first('title') }}</p>
            @endif

        </div>
    </div>


    <div class="form-group">

        <label for="body" class="label">
            Body
        </label>

        <div class="control">
            <textarea class="textarea @error('body') danger @enderror" name="body" id="body">

            {{ old('body') }}

            </textarea>
            @error('body')
            <p class="danger"> {{ $errors->first('body') }}</p>
            @enderror
        </div>


        <div class="form-group">

            <label for="image" class="label">
                Image
            </label>

            <div class="control">
                <input type="file" class="" id="image" name="image" data-buttonText="Browse">

                {{ old('image') }}

                @error('image')
                <p class="danger"> {{ $errors->first('image') }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>

</form>



@endsection('content')