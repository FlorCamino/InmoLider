@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

{{--Linea de código--}}
<div class="container-fluid">
<h2 class="title">Listado de usuarios</h2>

<table class="table table-striped table-hover">
 
  <thead class="justify-content-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre y apellido</th>
      <th scope="col">Rol</th>
      <th scope="col">DNI</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Código Postal</th>
      <th scope="col">Fecha de alta</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($usuarios as $usuario)
 <tr>
   <td>{{$usuario->id}}</td>
   <td>{{$usuario->nombre}} {{$usuario->apellido}}</td>
   <td>{{$usuario->Rol->nombre}}</td>
   <td>{{$usuario->dni}}</td>
   <td>{{$usuario->fechaNacimiento}}</td>
   <td>{{$usuario->usuario}}</td>
   <td>{{$usuario->telefono}}</td>
   <td>{{$usuario->direccion}}</td>
   <td>{{$usuario->Ciudad->nombre}}</td>
   <td>{{$usuario->CP}}</td>
   <td>{{$usuario->fechaCreacion}}</td>
   
   <td>
    <a href="{{route('usuario.show', $usuario)}}">
      <button type="button" class="icon btn-labeled btn-primary"><i class="fa fa-eye"></i></button>
    </a>
  </td>
  {{-- Código para editar--}}
   {{-- <td>
    <a href="{{route('usuario.edit', $usuario)}}">
      <button type="button" class="icon btn-labeled btn-primary"><i class="fa fa-pencil"></i></button>
    </a>
  </td> --}}
   <td>
    <button type="button" class="icon btn-labeled btn-danger" onclick="deleteConfirmation({{$usuario->id}})"><i class="fa fa-trash"></i></button>
</td>
 </tr> 
 @endforeach
</tbody>
</table>
</div>
 {{-- Código para crear --}}
{{-- <div class="container-fluid">
  <div class="text-right">
    <div class="row">
        <div class="col-12">
          <a class="text-light" href="{{route('usuario.create')}}">
            <button id="btn" role="button" type="submit" class="button-7">
        Agregar nuevo</a></button>
          </a>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- Código para eliminar --}}
<script type="text/javascript">
  function deleteConfirmation(id) {
      swal.fire({
          title: "Eliminar?",
          icon: 'question',
          text: "¿Estas seguro que desea eliminar este usuario?",
          type: "warning",
          showCancelButton: !0,
          confirmButtonText: "Si",
          cancelButtonText: "No",
          reverseButtons: !0
      }).then(function (e) {

          if (e.value === true) {
              let token = $('meta[name="csrf-token"]').attr('content');
              let _url = `/usuario/${id}`;
              
              $.ajax({
                  type: 'DELETE',
                  url: _url,
                  data: {_token: token},
                  success: function (resp) {
                      if (resp.success) {
                          swal.fire("Realizado!", resp.message, "success");
                      } else {
                          swal.fire("Error!", resp.error, "error");
                      }
                  },
                  error: function (resp) {
                      swal.fire("Error!", 'Something went wrong.', "error");
                  }
              });

          } else {
              e.dismiss;
          }

      }, function (dismiss) {
          return false;
      })
  }
</script>
@endsection
