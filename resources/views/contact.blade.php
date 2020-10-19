@extends('layout')

@section('content')
<div class="container">
    <h1>Send me a message</h1>
</div>
<form action="{{ url('/contact')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="content">Message</label>
        <textarea name="content" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">Submit</button>
</form>

@endsection('content')