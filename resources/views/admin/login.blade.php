@extends('layouts.admin_reg_login')

@section('content')

<div class="container">
    <form class="form-login" method="POST" action="{{route('login_admin.store')}}">
        @csrf
        <h1 class="subtitle">Bienvenido! Por favor, inicie sesión.</h1>
        <div class="form-floating">
            <input type="email" name="email" class="form-control form-control-orange" id="email"
                placeholder="name@example.com">
            <label class="form-check-label" for="email">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control form-control-orange" id="password"
                placeholder="Password">
            <label class="form-check-label" for="password">Contraseña</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember_token" id="remember_token" {{
                old('remember_token') ? 'checked' : '' }}>
            <label class="check-label" for="remember_token">
                Recordar datos
            </label>
        </div>
        <button class="btn-form-control form-control" type="submit">Ingresar</button>
        <p class="text-muted">InmoLider &copy; Derechos reservados 2022</p>
    </form>
</div>

@endsection