@extends('layout')

@section('content')

<div class="flex-center">
    @auth

    <div class="jumbotron mt-4">
        <h1 class="display-4">Hello, {{ Auth::user()->name }}</h1>
        <p class="lead">
            Hey, how's it going? Hope you're well
        </p>
        <a class="btn btn-primary btn-lg" href="{{ route('arts.create') }}" role="button">Post New Art</a>
        <a class="btn btn-danger btn-lg" href="{{ route('logout') }}" role="button">LogOut</a>
    </div>

    @else
    <div class="m-4 p-4">

        <a href="{{ route('arts') }}">
            <img class="img-fluid mx-auto" src="{!! url('images/Jacks/octopus.jpg') !!}" alt="Octopus, enter the site">
        </a>

        <div class="welcome-page-button">

            <a class="btn btn-secondary btn-lg" href="{{ route('arts') }}" role="button">Enter</a>
        </div>
        <p>Made in Indianapolis, IN</p>

    </div>

    @endauth
</div>


@endsection