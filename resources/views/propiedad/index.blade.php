@extends('layouts.plantilla')

@include('layouts.navbar')
@section('content')
<h1 class="text-align-center">Listado de propiedades</h1>

<table  class="table table-success table-striped-columns">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
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
                <td>{{$propiedad->cantHab}}</td>
                <th>{{$propiedad->cantBanios}}</th>
                <th>{{$propiedad->amoblado}}</th>
                <th>{{$propiedad->estacionamiento}}</th>
                <td>{{$propiedad->nombreTipoTransaccion}}</td>
                <td>{{$propiedad->nombreCiudad}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('layouts.footer')