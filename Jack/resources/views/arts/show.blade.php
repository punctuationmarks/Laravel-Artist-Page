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
            </div>
        </div>
    </div>
</div>



@endsection('content')