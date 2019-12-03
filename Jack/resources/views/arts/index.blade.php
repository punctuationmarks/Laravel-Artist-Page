@extends('layout')


@section('content')


<h1 class="font-weight-light text-center mt-4 mb-0">Lorem Ipsum</h1>
<hr class="mt-2 mb-5">

@auth
<div class="container m-2 pt-2">

    <a class="btn btn-primary btn-lg" href="{{ route('arts.create') }}" role="button">Post New Art</a>
    <a class="btn btn-danger btn-lg" href="{{ route('logout') }}" role="button">LogOut</a>

</div>
@endauth

<div class="container">
    <div class="row">

        <!-- if there are art, run this code 
    similar as foreach@ but a if/else block-->
        @forelse ($arts as $art)
        <!-- <div class="w-50 p-1 small-div"> -->
        <!-- <div class="w-50 p-5 medium-div"> -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <a href="{{ route('arts.show', $art) }}" class="">
                    <img class="img-fluid rounded mx-auto d-block" src="{!! url('images/'.$art->image_name) !!}" alt="{{ $art->title }}">
                </a>

            </div>
        </div>

        @empty
        <p>Wow, such empty, meaning no art has been posted yet</p>

        @endforelse

    </div>

</div>
@endsection('content')