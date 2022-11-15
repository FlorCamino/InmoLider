@extends('layouts.base_user')


@section('name', 'InmoLider')

@section('contenido')
    <h1 class="text-center">Propiedades</h1>
    <table class="table" style="border: solid 1 px black">
        <thead class="table-secondary text-dark">
            <tr>
                <th scope="col-3">Identificación</th>
                <th scope="col-3">Descripción</th>
                <th scope="col-2">Fecha de registro</th>
                <th scope="col-2">Dirección</th>
                <th scope="col-2">Barrio</th>
                <th scope="col-2">Ciudad</th>
                <th scope="col-2">Código postal</th>
                <th scope="col-2">Propietario</th>
                <th scope="col-2">Cantidad de habitaciones</th>
                <th scope="col-2">Cantidad de baños</th>
                <th scope="col-2">Estacionamiento</th>
                <th scope="col-2">Acepta mascotas</th>
                <th scope="col-2">Amoblado</th>
                <th scope="col-2">Tipo de transacción</th>
                <th scope="col-2">Período</th>
                <th scope="col-2">Costo</th>
                <th scope="col-2">Estado de propiedad</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($propiedades as $propiedad)
                <tr>
                    <th scope="row">{{ $propiedad->id }}</th>
                    <td>{{ $propiedad->descripcion }}</td>
                    <td>{{ $propiedad->fechaCreacion }}</td>
                    <td>{{ $propiedad->direccion }}</td>
                    <td>{{ $propiedad->barrio }}</td>
                    <td>{{ $propiedad->ciudad->nombre }}</td>
                    <td>{{ $propiedad->CP }}</td>
                    <td>{{ $propiedad->propietario }}</td>
                    <td>{{ $propiedad->cantHab }}</td>
                    <td>{{ $propiedad->cantBanios }}</td>
                    <td>{{ $propiedad->estacionamiento }}</td>
                    <td>{{ $propiedad->aceptaMascotas }}</td>
                    <td>{{ $propiedad->amoblado }}</td>
                    <td>{{ $propiedad->idTipoTransaccion->tipoTransaccion->nombre }}</td>
                    <td>{{ $propiedad->idPeriodo->Periodo->nombre }}</td>
                    <td>{{ $propiedad->costo }}</td>
                    <td>{{ $propiedad->idEstadoPropiedad->estadoPropiedad->nombre }}</td>
                    <td><a href="{{ route('propiedad.show', $propiedad) }}"><button type="submit"
                                class="btn btn-primary btn-sm">Ver
                                detalle</button></a></td>
                    <td><a href="{{ route('propiedad.edit', $propiedad) }}"><button type="submit"
                                class="btn btn-primary btn-sm">Editar</button></a></td>
                    <td>
                        <form method="post" action="{{ route('propiedad.destroy', $dato->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
            @endforeach
            </tr>
        </tbody>
    </table>
    <a href="{{ route('propiedad.create') }}"><button type="submit" class="btn btn-primary btn-sm">Agregar nueva</button></a>
@endsection
