@extends('layout')

@section('title')
    All Users
@endsection

@section('main')
    <h1>All users</h1>




    @foreach($users as $user)
        <hr>
        <div class="container">
            <p> Name:  {{$user->name}}</p>
            <p>Email:  {{$user->email}}</p>
            <p>Type: {{$user->role}} </p>
        </div>

        <hr>
    @endforeach

@endsection


