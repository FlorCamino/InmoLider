
@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')

<div class="container">
    <h2 class="title">Propiedades</h2>
    
    <form style="position: relative">
      <div class="row mb-4">
        <div class="col mb-4">
        <div class="form-outline" style="margin-bottom: 0px">
            <input type="number" class="form-control" disabled value="{{$propiedad->id}}"/>
            <label class="form-label" for="form6Example1">Identificación</label>
        </div>
        </div>
      </div>
      
        <div class="row mb-4">
            <div class="col mb-4">
              <div class="form-outline"  style="margin-bottom: 0px">
                <input type="text" class="form-control" disabled value="{{$propiedad->descripcion}}" />
                <label class="form-label" for="form6Example1">Descripción</label>
              </div>
            </div>
            <div class="col mb-4">
              <div class="form-outline"  style="margin-bottom: 0px">
                <input type="date" class="form-control" disabled value="{{$propiedad->fechaCreacion}}" />
                <label class="form-label" for="form6Example2">Fecha de registro</label>
              </div>
            </div>
        </div>
        <div class="row mb-4">
          <div class="col mb-4">
            <div class="form-outline"  style="margin-bottom: 0px">
              <input type="text" class="form-control" disabled value="{{$propiedad->direccion}}" />
              <label class="form-label" for="form6Example1">Dirección</label>
            </div>
          </div>
          <div class="col mb-4">
            <div class="form-outline"  style="margin-bottom: 0px">
              <input type="text" class="form-control" disabled value="{{$propiedad->barrio}}" />
              <label class="form-label" for="form6Example2">Barrio</label>
            </div>
          </div>
          <div class="col mb-4">
          <div class="form-outline"  style="margin-bottom: 0px">
            <input type="text" id="form6Example1" class="form-control" disabled value="{{$propiedad->Ciudad->nombre}}"/>
            <label class="form-label" for="form6Example1">Ciudad</label>
          </div>
          </div>
          <div class="col mb-4">
          <div class="form-outline "  style="margin-bottom: 0px">
            <input type="text" class="form-control" disabled value="{{$propiedad->CP}}" />
            <label class="form-label" for="form6Example1">Código Postal</label>
          </div>
        </div>
      </div>
      <div class="row mb-4">
      <div class="col mb-4">
      <div class="form-outline" style="margin-bottom: 0px">
        <input type="text" class="form-control" disabled value="{{$propiedad->Propietario->nombre}}"/>
        <label class="form-label" for="form6Example1">Propietario</label>
    </div>
    </div>
    </div>
        <div class="row mb-4">
          <div class="col mb-4">
            <div class="form-outline"  style="margin-bottom: 0px">
              <input type="number" class="form-control" disabled value="{{$propiedad->cantHab}}" />
              <label class="form-label" for="form6Example1">Habitaciones</label>
            </div>
          </div>
          <div class="col mb-4">
            <div class="form-outline"  style="margin-bottom: 0px">
              <input type="number" class="form-control" disabled value="{{$propiedad->cantBanios}}" />
              <label class="form-label" for="form6Example2">Baños</label>
            </div>
          </div>
      </div>
      <div class="row mb-4">
        <div class="col mb-4">
          <div class="form-outline"  style="margin-bottom: 0px">
            <label class="form-label" for="form6Example1">¿Acepta Mascotas?</label>
            @if ($propiedad->aceptaMascotas == true)
             <span style="font-family:sans-serif"> Si </span>
             @else 
              <span style="font-family:sans-serif"> No </span>
            @endif
          </div>
        </div>
        <div class="col mb-4">
          <div class="form-outline"  style="margin-bottom: 0px">
            <label class="form-label" for="form6Example2">Amoblado:</label>
            @if ($propiedad->amoblado == true)
             <span style="font-family:sans-serif"> Si </span>
             @else 
             <span style="font-family:sans-serif"> No </span>
            @endif
          </div>
        </div>
        <div class="col mb-4">
          <div class="form-outline"  style="margin-bottom: 0px">
            <label class="form-label" for="form6Example1">Estacionamiento:</label>
            @if ($propiedad->estacionamiento == true)
            <span style="font-family:sans-serif"> Si </span>
            @else 
            <span style="font-family:sans-serif"> No </span>
           @endif
          </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col mb-4">
          <div class="form-outline"  style="margin-bottom: 0px">
            <input type="text" class="form-control" disabled value="{{$propiedad->TipoTransaccion->nombre}}" />
            <label class="form-label" for="form6Example1">Tipo transacción</label>
          </div>
        </div>
        <div class="col mb-4">
          <div class="form-outline"  style="margin-bottom: 0px">
            <input type="text" class="form-control" disabled value="{{$propiedad->Periodo ? $propiedad->Periodo->nombre : '' }}" />
            <label class="form-label" for="form6Example2">Periodo</label>
          </div>
        </div>
        <div class="col mb-4">
        <div class="form-outline mb-4"  style="margin-bottom: 0px">
          <input type="text" id="form6Example1" class="form-control" disabled value="{{$propiedad->costo}}"/>
          <label class="form-label" for="form6Example1">Valor</label>
        </div>
        </div>
        <div class="col mb-4">
        <div class="form-outline mb-4"  style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$propiedad->EstadoPropiedad->nombre}}" />
          <label class="form-label" for="form6Example1">Estado de la propiedad</label>
        </div>
        </div>
    </div>   
        <!-- Submit button -->
        <div class="container-fluid">
          <div class="text-right">
            <div class="row">
                <div class="col-12">
                  <a href="{{route('propiedad.create')}}">
                    <button type="submit" class="button-7 ml-3"> <a class="text-light" href="{{route('propiedad.index')}}">Volver</a></button>
                  </a>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection


