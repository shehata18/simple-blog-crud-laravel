@extends('layout')

@section('title')
    Search Categories for {{$keyword}}
@endsection

@section('main')
    <h1>Search Categories for {{$keyword}}</h1>
    <a href="{{url('/cats')}}">Back to all Categories</a>

    <form action="{{url('/cats/search')}}" method="GET">
        <input type="text" name="keyword"  value="{{$keyword}}" id=""><br>
        <input type="submit" value="Search">
    </form>


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


