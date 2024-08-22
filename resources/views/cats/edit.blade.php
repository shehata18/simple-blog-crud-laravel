
<html>
<head>
    <title>Edit Category - {{$cat->name}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<h1>Edit Category - {{$cat->name}}</h1>
@include('errors')
<form method="post" action="{{url("/cats/update/$cat->id")}}" >
    @csrf
    <label>Name</label>
    <input type="text" name="name" id="" value="{{$cat->name}}"><br><br>
    <label>Description</label>
    <textarea name="desc" id="" cols="30" rows="10"> {{$cat->desc}} </textarea><br><br>
    <input type="submit" value="Edit">

</form>


</body>
</html>

