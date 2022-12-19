<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InmoLider</title>

    <!-- Styles boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="container">
        <form class="form-login" method="POST" action="{{route('login.store')}}">
            @csrf
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo" width="120" height="90">
            <h1 class="subtitle">Bienvenido! Por favor, inicie sesión.</h1>
            <div class="form-floating">
                <input type="email" name="email" class="form-control form-control-orange" id="email"
                    placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control form-control-orange" id="password"
                    placeholder="Password">
                <label for="password">Contraseña</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember_token" id="remember_token" {{
                    old('remember_token') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember_token">
                    Recordar datos
                </label>
            </div>
            <button class="btn-form-control form-control" type="submit">Ingresar</button>
            <p class="text-muted">InmoLider &copy; Derechos reservados 2022</p>
        </form>
    </div>


    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
        </script>
</body>

</html>