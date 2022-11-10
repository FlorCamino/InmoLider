@extends('layouts.plantilla')

@section('title', "InmoLíder")

@section('content')
<h2>Editar datos</h2>

@section('body')
@foreach ($propiedades as $propiedad)
<tr>
    <td>{{$propiedad->id}}</td>
    <td>{{$propiedad->descripcion}}</td>
    <td>{{$propiedad->nombreCiudad}}</td>
    <td>{{$propiedad->direccion}}</td>
    <td>{{$propiedad->cantHab}}</td>
    <td>{{$propiedad->cantBanios}}</td>
    <td>
        @if($propiedad->amoblado)
            <label>Si</label>
        @else
            <label>No</label>
        @endif
    </td>
    <td>
        @if($propiedad->estacionamiento)
            <label>Si</label>
        @else
            <label>No</label>
        @endif
    </td>
    <td>{{$propiedad->nombreTipoTransaccion}}</td>
        <form method="POST" action="{{route('administrador.update', $propiedad->id)}}">
            @method('PUT')

            <div>
                <label>Descripción</label>
                <input type="text" name="descripcion" value="{{$propiedad->descripcion}}">
            </div>
            <div>
                <label>Fecha de creación</label>
                <input type="text" name="fechaCreacion" value="{{$propiedad->fechaCreacion}}">
            </div>
            <div>
                <label>Ciudad</label>
                <input type="text" name="ciudad" value="{{$propiedad->idCiudad}}">
            </div>
            <div>
                <label>Dirección</label>
                <input type="text" name="direccion" value="{{$propiedad->direccion}}">
            </div>
            <div>
                <label>Barrio</label>
                <input type="text" name="barrio" value="{{$propiedad->barrio}}">
            </div>
            <div>
                <label>Código Postal</label>
                <input type="text" name="CP" value="{{$propiedad->CP}}">
            </div>
            <div>
                <label>Propietario</label>
                <input type="text" name="propietario" value="{{$propiedad->idpropietario}}">
            </div>
            <div>
                <label>Cantidad de habitaciones</label>
                <input type="text" name="cantHab" value="{{$propiedad->cantHab}}">
            </div>
            <div>
                <label>Cantidad de baños</label>
                <input type="text" name="cantBanios" value="{{$propiedad->cantBanios}}">
            </div>
            <div>
                <label>Estacionamiento</label>
                <input type="text" name="estacionamiento" value="{{$propiedad->estacionamiento}}">
            </div>
            <div>
                <label>Acepta Mascotas</label>
                <input type="text" name="aceptaMascotas" value="{{$propiedad->aceptaMascotas}}">
            </div>
            <div>
                <label>Amoblado</label>
                <input type="text" name="amoblado" value="{{$propiedad->amoblado}}">
            </div>
            <div>
                <label>Tipo de transacción</label>
                <input type="text" name="tipoTransaccion" value="{{$propiedad->idtipoTransaccion}}">
            </div>
            <div>
                <label>Periodo</label>
                <input type="text" name="periodo" value="{{$propiedad->idPeriodo}}">
            </div>
            <div>
                <label>Costo</label>
                <input type="text" name="costo" value="{{$propiedad->costo}}">
            </div>
            <div>
                <label>Estado de la propiedad</label>
                <input type="text" name="estadoPropiedad" value="{{$propiedad->idEstadoPropiedad}}">
            </div>
            <div>
                <button>Guardar cambios</button>
            </div>
        </form>
    </td>
</tr>
@endsection