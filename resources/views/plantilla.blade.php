<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Personajes
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('route.personajes', 'magos' )}}">Magos</a></li>
                            <li><a class="dropdown-item" href="{{ route('route.personajes', 'mortifago')}}">Mortífagos</a></li>
                            <li><a class="dropdown-item" href="{{ route('route.personajes', 'muggle' )}}">Muggles</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Casas
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Gryffindor</a></li>
                            <li><a class="dropdown-item" href="#">Hufflepuff</a></li>
                            <li><a class="dropdown-item" href="#">Ravenclaw</a></li>
                            <li><a class="dropdown-item" href="#">Slytherin</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Bestiario</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Hechizos famosos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('route.autor') }}">J.K Rowling</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Comunidad</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div>Header</div>

    <div class="container">
        @yield('seccion')
    </div>

    <div>Footer</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>