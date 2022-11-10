@extends('layouts.plantilla')


@section('content')


  <body id='login' class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal">InmoLíder-Administración</h1>
    <img id="loginimg" class="mb-4" src="{{ asset('img/images.png') }}" alt="" width="72" height="57">
    <h6 class="h3 mb-3 fw-normal">Por favor, inicie session</h6>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
      <label for="floatingInput">Ingresar el email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordar datos
      </label>
    </div>
    <button id="loginbtn" class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022 InmoLíder</p>
  </form>
</main>
</body>
  @endsection

