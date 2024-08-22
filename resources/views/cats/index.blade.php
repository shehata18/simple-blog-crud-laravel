@extends('layout')

@section('title')
    All Categories
@endsection

@section('main')
    <h1>All Categories</h1>

    @if(request()->session()->has('success-msg'))
        <div class="alert alert-success">
            <p>{{request()->session()->get('success-msg')}}</p>
        </div>
    @endif


    <a href="{{url('/cats/create')}}">Add Category</a>

    <form action="{{url('/cats/search')}}" method="GET">
        <input type="text" name="keyword" id=""><br>
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

    {{$cats->links()}}
@endsection


