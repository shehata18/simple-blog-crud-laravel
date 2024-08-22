@extends('layout')

@section('title')
    All Books
@endsection

@section('main')
    <h1>All Books</h1>
    <a href="{{url('/books/create')}}">Add Book</a>

{{--    <form action="{{url('/cats/search')}}" method="GET">--}}
{{--        <input type="text" name="keyword" id=""><br>--}}
{{--        <input type="submit" value="Search">--}}
{{--    </form>--}}


    @foreach($books as $book)
        <hr>
        <h3><a class="btn-info" href="{{url("/cats/show/$book->id")}}">
                {{$book->id . " - " . $book->name}}
            </a>
        </h3>
        <a href="{{url("/cats/edit/$book->id")}}">Edit</a><br>
        <a href="{{url("/cats/delete/$book->id")}}">Delete</a><br>
        <p>{{$book->desc}}</p>
        <p>price:  {{$book->price}}</p>


    @endforeach

    {{$books->links()}}
@endsection


