@extends('layout')

@section('title')
@endsection


@section('main')
    <h1>Register</h1>

    @include('errors')



    <form action="{{url('/register')}}" method="POST">
        @csrf
        <label>Name: </label>
        <input type="text" name="name"><br><br>
        <label>Email: </label>
        <input type="email" name="email"><br><br>
        <label>Password: </label>
        <input type="password" name="password"><br><br>
        <label>Confirm Password:  </label>
        <input type="password" name="password_confirmation"><br><br>
        <input type="submit" name="register"><br>


    </form>

@endsection
