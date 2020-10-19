@extends("layout")


@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div class="pt-2">
            <img class="img-fluid rounded mx-auto d-block" src="{!! url('/images/'.$art->image_name) !!}" alt="{{$art->title}}" />
            <div class="pt-4 mt-2 p-1 m-1">
                <h2>{{ $art->title }}</h2>
                <span class="text-justify">
                    {{ $art->body }}
                </span>

                @auth
                <div class="container m-2 pt-2">

                    <a class="btn btn-primary btn-lg" href="/arts/{{ $art->id }}/edit" role="button">Edit</a>
                    <a class="btn btn-danger btn-lg" href="/arts/{{ $art->id }}/destroytodeath" role="button">Destroy this and start over</a>

                </div>
                @endauth
            </div>
        </div>
    </div>
</div>



@endsection('content')