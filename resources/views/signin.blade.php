@extends('layout.master')

@section('title')
    Sign In
@endsection

@section('signin')
    <div class="text-center">
        <form action="" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Email address" value="">
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" value="">
            <button class="btn btn-primary btn-block" type="submit">Sign In</button>
        </form>
    </div>
@endsection