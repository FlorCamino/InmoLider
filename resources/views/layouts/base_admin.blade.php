<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('name')</title>
    {{-- Estilos --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/base_admin.css') }}">
    {{-- Favicon --}}
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    {{-- Autenticación --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand navbar-light" style="background-color:grey">
        <div class="container col-1">
            <a class="navbar-brand"><img class="d-block" width="40" height="36"
                    src="{{ asset('img/images.png') }}"></a>
            <a class="navbar-brand">InmoLíder</a>
        </div>
        <div class="container col-8"
            style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">TRANSACCIÓN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROPIETARIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">USUARIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ciudad.index') }}">CIUDADES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PROPIEDADES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">ESTADO DE PROPIEDADES</a></li>
                            <li><a class="dropdown-item" href="#">PERIODO</a></li>
                            <li><a class="dropdown-item" href="#">IMAGENES</a></li>
                            <li><a class="dropdown-item" href="#">FAVORITAS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="container col-2">
                <p> <strong> Hola,
                        "nombre" </strong> </p>
            </div>
    </nav>

    @yield('content')


    <footer class="bg-info text-center text-lg-start fixed-bottom">
        <div class="container-absolute p-4" style="background-color: grey">

            <div class="row">
                <div class="text-center p-3" style="background-color:aliceblue">
                    © 2020 Copyright:
                    <strong>InmoLíder.com</strong>
                </div>
            </div>
        </div>
    </footer>
    {{-- JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>
