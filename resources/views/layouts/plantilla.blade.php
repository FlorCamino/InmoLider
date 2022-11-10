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
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/app.css') }}" />
    {{-- Favicon --}}
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
    <header>
        <nav id="navbar-header" class="w-100 float-left navbar-expand-lg navback">
            <div class="container-fluid boxnav">
                <div class="navbar-brand">
                    <a class="navbar-brand"><img class="d-block" width="40" height="36"
                            src="{{ asset('img/images.png') }}"></a>
                    <a class="navbar-brand">InmoLíder</a>
                </div>
            </div>
            <div class="container-fluid box-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-container"
                    aria-controls="main-nav-container" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar">
                        </span>
                    </span>
                </button>
                <div class="container-fluid menu-content collapse navbar-collapse menu" id="main-nav-container">
                    <ul>
                        <li class="li-menu">
                            <a class="nav-link selected" href="#" title="Inicio">Inicio</a>
                        </li>
                        <li class="li-menu">
                            <a class="nav-link" href="#" title="Servicios">Servicios</a>
                        </li>
                        <li class="li-menu">
                            <a class="nav-link" href="#" title="Propiedades">Propiedades</a>
                        </li>
                        <li class="li-menu">
                            <a class="nav-link" href="#" title="Requisitos para Alquilar">Requisitos para
                                Alquilar</a>
                        </li>
                        <div class="dl_search-box dropdown-dl">
                            <div class="dl_input_search">
                                <input type="search" id="inputSearchHeader" placeholder="Búsqueda personalizada"
                                    value="">
                                <button type="button btn-lg btn-secondary" id="inputSearchHeaderButton"
                                    class="dl_search-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    {{-- JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>
