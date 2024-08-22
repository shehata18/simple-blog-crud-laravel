
@extends('layout')
@section('title')
    Latest {{$num}} Categories
@endsection

@section('main')
    <h1>Latest {{$num}} Categories</h1>
    <a href="{{url('/cats')}}">Back to all</a>
    @foreach($cats as $cat)
        <hr>
        <h3><a class="btn-info" href="{{url("/cats/show/$cat->id")}}">
                {{$cat->id . " - " . $cat->name}}
            </a>
        </h3>
        <a href="{{url("/cats/edit/$cat->id")}}">Edit</a><br>
        <a href="{{url("/cats/delete/$cat->id")}}">Delete</a><br>
        <p>{{$cat->desc}}</p>


    @endforeach
@endsection
