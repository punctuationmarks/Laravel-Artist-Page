@extends('layout')


@section('content')

<section class="container p-2 pb-5 mb-5">
    <h1>Are you sure?</h1>
    {{ Form::model($art, ['method' => 'DELETE', 'route' => ['arts.destroy', $art->id]]) }}
    {{ Form::submit('Yeah, destroy this post', ['class' => 'form-control btn btn-danger btn-lg'])}}
    {{ Form::close() }}

</section>
@endsection('content')