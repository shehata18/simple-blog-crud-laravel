<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
        <a class="navbar-brand" href='{{url('/cats')}}'>Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest()
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                    </li>
                @endguest
                @auth()
                    <li class="nav-item">
                        <a class="nav-link btn-danger " href="{{url('/logout')}}">logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<div class="container-my-5">
@yield('main')

</div>




<script src="{{asset('JS/bootstrap.js')}}"></script>
@yield('page-scripts')

</body>
</html>



