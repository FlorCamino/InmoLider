@extends('layouts.plantilla')

@section('content')

<h2>Propietarios:</h2>
<div class="form-control">
    <label>Identificación</label>
    <input type="text" name="id" value="{{$propietario->id}}">
</div>
<div class="form-control">
    <label>Nombre</label>
    <input type="text" name="nombre" value="{{$propietario->nombre}}">
</div>
<div class="form-control">
    <label>Apellido</label>
    <input type="text" name="apellido" value="{{$propietario->apellido}}">
</div>
<div class="form-control">
    <label>DNI</label>
    <input type="text" name="dni" value="{{$propietario->dni}}">
</div>
<div class="form-control">
    <label>Fecha de Nacimiento</label>
    <input type="text" name="fechaNacimiento" value="{{$propietario->fechaNacimiento}}">
</div>
<div class="form-control">
    <label>Email</label>
    <input type="text" name="email" value="{{$propietario->email}}">
</div>
<div class="form-control">
    <label>Teléfono</label>
    <input type="text" name="telefono" value="{{$propietario->telefono}}">
</div>
<div class="form-control">
    <label>Domicilio</label>
    <input type="text" name="domicilio" value="{{$propietario->domicilio}}">
</div>
<div class="form-control">
    <label>Ciudad</label>
    <input type="text" name="ciudad" value="{{$propietario->idCiudad}}">
</div>
<div class="form-control">
    <label>Código Postal</label>
    <input type="text" name="CP" value="{{$propietario->CP}}">
</div>
<div class="form-control">
    <label>Descripción</label>
    <input type="text" name="descripcion" value="{{$propietario->descripcion}}">
</div>
<div class="form-control">
    <label>Fecha y hora de registro</label>
    <input type="text" name="fechaDeCarga" value="{{$propietario->fechaDeCarga}}">
</div>
<div>
    <button type="button" class="btn btn-success">
    <a href="{{route('propietario.index')}}">Volver</a>
</button>
</div>

@endsection