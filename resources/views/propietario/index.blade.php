@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')
<h1>Listado de propietarios</h1>
<table class="table form-control">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">DNI</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Email</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Código Postal</th>
        <th scope="col">Descripción</th>
        <th scope="col">Fecha de inscripción</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
         @foreach ($propietarios as $propietario)
      <tr>
        <td>{{$propietario->id}}</td>
        <td>{{$propietario->nombre}}</td>
        <td>{{$propietario->apellido}}</td>
        <td>{{$propietario->dni}}</td>
        <td>{{$propietario->fechaNacimiento}}</td>
        <td>{{$propietario->email}}</td>
        <td>{{$propietario->telefono}}</td>
        <td>{{$propietario->domicilio}}</td>
        <td>{{$propietario->idCiudad}}</td>
        <td>{{$propietario->CP}}</td>
        <td>{{$propietario->descripcion}}</td>
        <td>{{$propietario->fechaCarga}}</td>
        <td><a href="{{route('propietario.show', $propietario)}}"><button type="submit" class="btn btn-success btn-sm">Ver detalle</button></a></td>
        <td><a href="{{route('propietario.edit', $propietario)}}"><button type="submit" class="btn btn-success btn-sm">Editar</button></a></td>
        <td><form method="post" action="{{route('propietario.destroy',$propietario->id)}}">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-success btn-sm">Delete</button>
      </form></td>
        @endforeach
      </tr> 
    </tbody>
  </table>
  <a href="{{route('propietario.create')}}"><button type="submit" class="btn btn-success btn-sm">Agregar ciudad</button></a>
@endsection