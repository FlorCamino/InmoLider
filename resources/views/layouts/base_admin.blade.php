<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('name')</title>
    {{-- Icons Navbar --}}
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    {{-- Estilos --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/base_admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    {{-- Favicon --}}
    <link rel="icon" href="logo1.ico" type="image/x-icon" />
    {{-- jQuery --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>
    <nav>
        {{-- Barra de navegación --}}
        <div class="container">
            <div class="row navbar">
                <div class="col logo">
                    <img class="bi me-2" width="80" height="60" role="img" src="{{ asset('img/logo1.jpg') }}"
                        alt="logo">
                </div>
                <div class="col-8">
                    <ul class="group-list">
                        <li class="nav-li">
                            <a href="{{ route('propiedad.index') }}" id="btn1" class="nav-link">
                                <span class="iconify bi d-block mx-auto mb-1" data-icon="mdi:home-city" data-width="30"
                                    data-height="30"></span>
                                Propiedades
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="{{ route('propietario.index') }}" id="btn2" class="nav-link">
                                <span class="iconify bi d-block mx-auto mb-1" data-icon="arcticons:simplefilemanager"
                                    data-width="30" data-height="30"></span>
                                Propietarios
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="{{ route('usuario.index') }}" id="btn3" class="nav-link">
                                <span class="iconify bi d-block mx-auto mb-1" data-icon="mdi:account-group"
                                    data-width="30" data-height="30"></span>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="{{ route('ciudad.index') }}" id="btn4" class="nav-link">
                                <span class="iconify bi d-block mx-auto mb-1" data-icon="arcticons:city-transit"
                                    data-width="30" data-height="30"></span>
                                Ciudades
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="{{ route('transaccion.index') }}" id="btn5" class="nav-link">
                                <span class="iconify bi d-block mx-auto mb-1" data-icon="fluent:form-new-48-regular"
                                    data-width="30" data-height="30"></span>
                                Transacción
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav-user">
        </div>
    </nav>

    @yield('content')

    {{-- Footer --}}
    <footer>
        <div class="foot container-fluid py-3">
            <div class="row">
                <div class="text-center py-3">
                    © 2020 Copyright:
                    <strong>
                        <a class="footlink" href="{{ route('propiedad.index') }}"> InmoLider.com </a>
                    </strong>
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