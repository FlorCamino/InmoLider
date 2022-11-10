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
    <link rel="icon" href="logo1.ico" type="image/x-icon" />
    {{-- Autenticación --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    {{-- Barra de navegación --}}
    <nav id="navbar" class="navbar navbar-expand">
        <div class="container col-1">
            <a class="navbar-brand"><img id="img" src="{{ asset('img/logo1.jpg') }}"></a>
        </div>
        <div class="container col-8"
            style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul id="navwords" class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Transacción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Propietarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ciudad.index') }}">Ciudades</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Propiedades
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Estado de propiedades</a></li>
                            <li><a class="dropdown-item" href="#">Período</a></li>
                            <li><a class="dropdown-item" href="#">Imagenes</a></li>
                            <li><a class="dropdown-item" href="#">Favoritas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="user" class="container col-3">
                <p>  Hola, nombre </p>
                <span><a class="navbar-brand"><img id="userimg" src="{{ asset('img/vector.jpg') }}"></a></span>
            </div>
            
    </nav>
    {{-- Línea horizontal --}}
    <hr class="container-absolute col-10bg-secondary border-1 border-top border-secondary">

    @yield('content')

{{-- Footer --}}
    <footer id="footer" class="fixed-bottom">
        <div id="foot" class="container-absolute p-4">

            <div class="row">
                <div class="text-center">
                    © 2020 Copyright:
                    <strong> <a id="footlink" href="{{--route('admin.inicio')--}}"> InmoLider.com </a> </strong>
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
