<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InmoLider</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> 

<!-- Styles boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- Favicons -->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
  </head>
<body>
    <main >
        <div class="container form-signin">
            <form class="text-center">
                <img class="mb-4" src="{{asset('img/logo.jpg')}}" alt="Logo" width="120" height="90">
                <h1 class="h3 mb-3 fw-normal">Bienvenido! Por favor, inicie sesión</h1>
                <div class="mb-3 form-floating">
                <input type="email" class="form-control form-control-orange" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
                </div>
                <div class="mb-3 form-floating">
                <input type="password" class="form-control form-control-orange" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
                </div>
                <button class="btn-form-control form-control" type="submit">Ingresar</button>
                <p class="mt-5 text-muted">InmoLider &copy; 2022</p>
            </form>
        </div>
    </main>

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
  </body>
</html>