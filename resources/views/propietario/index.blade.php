@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
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
     <button id="btn" type="submit" onclick="deleteConfirmation({{$propietario->id}})" class="btn btn-primary btn-sm">Eliminar</button>
 {{-- </form> --}}
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


<script type="text/javascript">
  function deleteConfirmation(id) {
      swal.fire({
          title: "Eliminar?",
          icon: 'question',
          text: "¿Estas seguro que desea eliminar este registro?",
          type: "warning",
          showCancelButton: !0,
          confirmButtonText: "Si",
          cancelButtonText: "No",
          reverseButtons: !0
      }).then(function (e) {

          if (e.value === true) {
              let token = $('meta[name="csrf-token"]').attr('content');
              let _url = `/propietario/${id}`;
              
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