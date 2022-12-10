@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')

<div class="container">
  <h2 class="title">Propietario</h2>
  <form style="position: relative">
    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <input type="number" class="form-control" disabled value="{{$propietario->id}}" />
      <label class="form-label" for="form6Example1">Identificación</label>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$propietario->nombre}}" />
          <label class="form-label" for="form6Example1">Nombre</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$propietario->apellido}}" />
          <label class="form-label" for="form6Example2">Apellido</label>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="number" class="form-control" disabled value="{{$propietario->dni}}" />
          <label class="form-label" for="form6Example1">DNI</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="date" class="form-control" disabled value="{{$propietario->fechaNacimiento}}" />
          <label class="form-label" for="form6Example2">Fecha de Nacimiento</label>
        </div>
      </div>
    </div>
    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <input type="email" id="form6Example1" class="form-control" disabled value="{{$propietario->email}}" />
      <label class="form-label" for="form6Example1">Email</label>
    </div>
    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <input type="tel" class="form-control" disabled value="{{$propietario->telefono}}" />
      <label class="form-label" for="form6Example1">Teléfono</label>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$propietario->domicilio}}" />
          <label class="form-label" for="form6Example1">Domicilio</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$propietario->Ciudad->nombre}}" />
          <label class="form-label" for="form6Example2">Ciudad</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" id="form6Example1" class="form-control" disabled value="{{$propietario->CP}}" />
          <label class="form-label" for="form6Example1">Código Postal</label>
        </div>
      </div>
    </div>
    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <textarea class="form-control" id="form6Example1" rows="4" disabled>{{$propietario->descripcion}}</textarea>
      <label class="form-label" for="form6Example7">Información Adicional</label>
    </div>
    <!-- Submit button -->
    <div class="container-fluid">
      <div class="text-right">
        <div class="row">
          <div class="col-12">
            <a href="{{route('propietario.create')}}">
              <button type="submit" class="button-7 ml-3"> <a class="text-light"
                  href="{{route('propietario.index')}}">Volver</a></button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection