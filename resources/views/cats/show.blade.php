<html>
    <head>
        <title>Show category - {{$cat->name}}</title>
    </head>
    <body>
        <h1>Show category - {{$cat->name}}</h1>
        <hr>
        <h3>{{$cat->id . " - " . $cat->name}}</h3>
        <p>{{$cat->desc}}</p>
        <small>created at - {{$cat->created_at}}</small>

    <a href="{{url('/cats')}}">back</a>



    </body>
</html>
