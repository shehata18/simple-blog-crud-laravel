<html>
<head>
    <title>Add Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1>Create Categories</h1>
@include('errors')
<form method="post" action="{{url('/cats/store')}}" enctype="multipart/form-data" >
    @csrf
    <input type="text" name="name" id="" placeholder="Enter name of category"><br><br>
    <textarea name="desc" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit" value="Send">

</form>


</body>
</html>
