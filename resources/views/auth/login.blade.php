@extends('layout')

@section('title')
@endsection


@section('main')
    <h1>Login</h1>

    @include('errors')
    @if(request()->session()->has('error-msg'))
        <div class="alert alert-danger">
            <p>{{request()->session()->get('error-msg')}}</p>
        </div>
    @endif


    <form action="{{url('/login')}}" method="POST">
        @csrf
        <label>Email: </label>
        <input type="email" name="email"><br><br>
        <label>Password: </label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login"><br>

    </form>

@endsection

