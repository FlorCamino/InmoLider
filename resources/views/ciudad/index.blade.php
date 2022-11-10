@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')
    <h1 class="text-center">Ciudades</h1>
    <table class="table" style="border: solid 1 px black">
        <thead class="table-secondary text-dark">
            <tr>
                <th scope="col">Identificación</th>
                <th scope="col">Nombre</th>
                <th scope="col">Detalle</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($ciudades as $dato)
                <tr>
                    <th scope="row">{{ $dato->id }}</th>
                    <td>{{ $dato->nombre }}</td>
                    <td><a href="{{ route('ciudad.show', $dato) }}"><button type="submit"
                                class="btn btn-primary btn-sm">Ver
                                detalle</button></a></td>
                    <td><a href="{{ route('ciudad.edit', $dato) }}"><button type="submit"
                                class="btn btn-success btn-sm">Editar</button></a></td>
                    <td>
                        <form method="post" action="{{ route('ciudad.destroy', $dato->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
            @endforeach
            </tr>
        </tbody>
    </table>
    <a href="{{ route('ciudad.create') }}"><button type="submit" class="btn btn-warning btn-sm">Agregar nueva</button></a>
@endsection
