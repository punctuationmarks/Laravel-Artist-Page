@extends('layout')


@section('content')

<section class="container p-2 pb-5 mb-5">
    <h1>Create new art</h1>
    {{ Form::open(['route' => 'arts.store', 'files' => true]) }}

    @include('arts/art_form')

    {{ Form::close() }}

</section>
@endsection('content')