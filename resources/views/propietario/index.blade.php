@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')
<div class="container-fluid">
<h2 id="h2">Listado de propietarios</h2>

<table class="table table-striped table-hover">
 
  <thead class="justify-content-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">DNI</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Código Postal</th>
      <th scope="col">Descripción</th>
      <th scope="col">Fecha de alta</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($propietarios as $propietario)
 <tr>
   <td>{{$propietario->id}}</td>
   <td>{{$propietario->nombre}} {{$propietario->apellido}}</td>
   <td>{{$propietario->dni}}</td>
   <td>{{$propietario->fechaNacimiento}}</td>
   <td>{{$propietario->email}}</td>
   <td>{{$propietario->telefono}}</td>
   <td>{{$propietario->domicilio}}</td>
   <td>{{$propietario->Ciudad->nombre}}</td>
   <td>{{$propietario->CP}}</td>
   <td>{{$propietario->descripcion}}</td>
   <td>{{$propietario->fechaDeCarga}}</td>
   <td>
    <a href="{{route('propietario.show', $propietario)}}">
      <button id="btn" type="submit" class="btn btn-primary btn-sm">Ver detalle</button>
    </a>
  </td>
   <td>
    <a href="{{route('propietario.edit', $propietario)}}">
      <button id="btn" type="submit" class="btn btn-primary btn-sm">Editar</button>
    </a>
  </td>
   <td>
    <form method="post" action="{{route('propietario.destroy',$propietario->id)}}">
     @method('delete')
     @csrf
     <button id="btn" type="submit" class="btn btn-primary btn-sm">Delete</button>
 </form>
</td>
   @endforeach
 </tr> 
</tbody>

</table>
</div>
<div>
  <a href="{{route('propietario.create')}}">
    <button id="btn" type="submit" class="btn btn-primary btn-sm">Agregar</button>
  </a>
</div>
@endsection