<html>
<head>
    <title>Show Book - {{$book->name}}</title>
</head>
<body>
<h1>Show Book - {{$book->name}}</h1>
<hr>
<h3>{{$book->id . " - " . $book->name}}</h3>
<p>{{$book->desc}}</p>
<p>price: {{$book->price}}</p>
<small>created at - {{$book->created_at}}</small>

<a href="{{url('/books')}}">back</a>



</body>
</html>

