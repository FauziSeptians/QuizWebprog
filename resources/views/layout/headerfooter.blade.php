<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<div class="header-giant">
    Giant Book Supplier
</div>
<header>

</header>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 m-0">
            <div class="container-fluid navbar-giant" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($category as $x)
                                <li><a class="dropdown-item" href="/category/{{$x->id}}">{{$x->name}}</a></li>
                            @endforeach
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/publisher')}}">Publisher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
    </nav>


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

<footer>
    <div class="footer-giant">
        © Happy Book store 2022
    </div>
</footer>

</html>
