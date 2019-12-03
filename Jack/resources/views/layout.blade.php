<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bootstrap 4 CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-grid.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">



</head>

<body>

    <a class="text-center sr-only sr-only-focusable" href="{{ route('arts')}}">Skip to arts</a>
    <!-- these two navbars shown on small vs large screens through media queries -->
    <a class="text-center sr-only sr-only-focusable" href="#navbar-toggle">Skip to navigation</a>
    <a class="text-center sr-only sr-only-focusable" href="#footer-toggle">Skip to navigation</a>
    <a class="text-center sr-only sr-only-focusable" href="{{ route('contact')}}">Skip to contact</a>

    <header id="header-navbar-lg">
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-gray">About</h4>
                        <p class="text-gray lead">
                            I'm Jack Georgopuls and I make art.
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-gray">Contact</h4>
                        <ul class="list-inline">
                            <li class="p-2 list-inline-item"><a href="https://www.snapchat.com/add/georgopulos" target="_blank" class="text-gray lead"><i class="fab fa-snapchat-square"></i></a></li>
                            <li class="p-2 list-inline-item"><a href="https://soundcloud.com/user-271744266" target="_blank" class="text-gray lead"><i class="fab fa-soundcloud"></i></a></li>
                            <li class="p-2 list-inline-item"><a href="https://www.instagram.com/jack_georgopulos/" target="_blank" class="text-gray lead"><i class="fab fa-instagram"></i></a></li>
                            <li class="p-2 list-inline-item"><a href="{{ route('contact') }}" class="text-gray lead"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark">
            <div id="navbar-toggle" class="container d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-compass"></i>
                </button>

                <a href="{{ route('arts') }}" class="navbar-brand d-flex align-items-center">
                    <strong class="text-gray">Jack Georgopuls</strong>
                </a>
            </div>
        </div>

    </header>

    <header id="header-navbar-sm">

        <div class="navbar navbar-dark bg-dark">
            <div class="container d-flex justify-content-between">

                <a href="{{ route('arts')}}" class="navbar-brand d-flex align-items-center">
                    <strong class="text-gray">Jack Georgopuls</strong>
                </a>
            </div>
        </div>
    </header>





    <div class="p-3 m-3">

        @yield('content')

    </div>





    <nav id="footer-navbar" class="navbar fixed-bottom navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <strong>
                <a class="text-gray" href="{{ route('arts')}}">
                    <i class="fas fa-broom"></i>
                </a>
            </strong>

            <button id="footer-toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-compass"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="p-1 list-inline">
                <li class="p-2 list-inline-item"><a href="https://www.snapchat.com/add/georgopulos" target="_blank" class="lead text-gray"><i class="fab fa-snapchat-square"></i></a></li>
                <li class="p-2 list-inline-item"><a href="https://soundcloud.com/user-271744266" target="_blank" class="lead text-gray"><i class="fab fa-soundcloud"></i></a></li>
                <li class="p-2 list-inline-item"><a href="https://www.instagram.com/jack_georgopulos/" target="_blank" class="lead text-gray"><i class="fab fa-instagram"></i></a></li>
                <li class="p-2 list-inline-item"><a href="{{ route('contact') }}" class="lead text-gray"><i class="far fa-envelope"></i></a></li>
            </ul>
        </div>
    </nav>


    <!-- Font Awesome  -->
    <script src="https://kit.fontawesome.com/03ec9c2be2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 -->
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>