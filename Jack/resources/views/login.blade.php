@extends('layout')

@section('content')
    <div class="container p-5 m-5">

        <form method="POST" class="form-signin">
        @csrf 
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

            <button class="mt-2 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div>

@endsection('content')