@extends('layouts.plantilla')

@include('layouts.adm_navbar')

@section('content')
<h1 class="text-align-center">Listado de propiedades</h1>
@section('body')
@can('crear_tecnicos')
<div>
     <a href="{{route('administrador.create')}}"><button>Agregar</button></a> 
</div>
@endcan
<div>
    <p>Hola {{$usuario->nombre}}</p> 
</div>
<table  class="table table-success table-striped-columns">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Condición</th>
            <th>Cantidad de Habitaciones</th>
            <th>Cantidad de Baños</th>
            <th>Amoblado</th>
            <th>Estacionamiento</th>
            <th>Lugar</th>
        </tr>
    </thead>
    <tbody>
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
                <td>
                    <a href="{{route('administrador.show', $propiedad->id)}}">Ver detalle</a> 
               </td>
               <td>
                    <a href="{{route('administrador.edit', $propiedad->id)}}">Editar</a> 
               </td>
            </tr>
        @endforeach
    </tbody>
</table>
