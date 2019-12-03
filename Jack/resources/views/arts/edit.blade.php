@extends('layout')


@section('content')

<section class="container p-2 pb-5 mb-5">
    <h1>Edit</h1>
    {{ Form::model($art, ['method' => 'PUT', 'route' => ['arts.update', $art->id], 'files' => true]) }}

    @include('arts/art_form', ['buttonText' => 'Update'])

    {{ Form::close() }}

</section>
@endsection('content')