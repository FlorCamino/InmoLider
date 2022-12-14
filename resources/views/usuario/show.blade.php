@extends('layouts.base_admin')

<style>
  #btn3 {
    background-color: #1565c0;
    color: white;
  }
</style>

@section('name', 'InmoLíder')

@section('content')

<div class="container">
  <h2 class="title">Usuario</h2>

  <form style="position: relative">
    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <input type="number" class="form-control" disabled value="{{$usuario->id}}" />
      <label class="form-label" for="form6Example1">Identificación</label>
    </div>

    <div class="row mb-4">
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$usuario->nombre}} {{$usuario->apellido}}" />
          <label class="form-label" for="form6Example1">Nombre y apellido</label>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="number" class="form-control" disabled value="{{$usuario->dni}}" />
          <label class="form-label" for="form6Example1">DNI</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="datetime" class="form-control" disabled value="{{$usuario->fechaNacimiento}}" />
          <label class="form-label" for="form6Example2">Fecha de Nacimiento</label>
        </div>
      </div>
    </div>
    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <input type="email" id="form6Example1" class="form-control" disabled value="{{$usuario->email}}" />
      <label class="form-label" for="form6Example1">Email</label>
    </div>

    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <input type="tel" class="form-control" disabled value="{{$usuario->telefono}}" />
      <label class="form-label" for="form6Example1">Teléfono</label>
    </div>

    <div class="row mb-4">
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$usuario->direccion}}" />
          <label class="form-label" for="form6Example1">Domicilio</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$usuario->Ciudad->nombre}}" />
          <label class="form-label" for="form6Example2">Ciudad</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" id="form6Example1" class="form-control" disabled value="{{$usuario->CP}}" />
          <label class="form-label" for="form6Example1">Código Postal</label>
        </div>
      </div>
    </div>
    <!-- Submit button -->
    <div class="container-fluid">
      <div class="text-right">
        <div class="row">
          <div class="col-12">
            <a href="{{route('usuario.create')}}">
              <button type="submit" class="button-7 ml-3"> <a class="text-light"
                  href="{{route('usuario.index')}}">Volver</a></button>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection