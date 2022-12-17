@extends('layouts.base_admin')

<style>
    #btn1 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('name', 'InmoLíder')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

{{-- Linea de código --}}
<div class="container-fluid">
    <h2 class="title">Listado de propiedades</h2>

    <table class="table table-striped table-hover">

        <thead class="justify-content-center">
            <tr>
                <th scope="col-3">Identificación</th>
                <th scope="col-3">Título</th>
                <th scope="col-2">Fecha de creación</th>
                <th scope="col-2">Dirección</th>
                <th scope="col-2">Barrio</th>
                <th scope="col-2">Ciudad</th>
                <th scope="col-2">Propietario</th>
                <th scope="col-2">Tipo de transacción</th>
                <th scope="col-2">Costo</th>
                <th scope="col-2">Estado de propiedad</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($propiedades as $propiedad)
            <tr>
                <?php $date = \Carbon\Carbon::parse($propiedad->fechaDeCreacion)->format('d-m-y');?>

                <td>{{ $propiedad->id }}</td>
                <td>{{ $propiedad->titulo }}</td>
                <td>{{ $date }}</td>
                <td>{{ $propiedad->direccion }}</td>
                <td>{{ $propiedad->barrio }}</td>
                <td>{{ $propiedad->Ciudad->nombre }}</td>
                <td>{{ $propiedad->Propietario->nombre . ' ' . $propiedad->Propietario->apellido }}</td>
                <td>{{ $propiedad->TipoTransaccion->nombre }}</td>
                <td>{{ $propiedad->costo }}</td>
                <td>{{ $propiedad->EstadoPropiedad->nombre }}</td>
                <td>
                    <a href="{{ route('propiedad.show', $propiedad) }}">
                        <button type="button" class="icon btn-labeled btn-primary"><i class="fa fa-eye"></i></button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('propiedad.edit', $propiedad) }}">
                        <button type="button" class="icon btn-labeled btn-primary"><i class="fa fa-pencil"></i></button>
                    </a>
                </td>
                <td>
                    <button type="button" class="icon btn-labeled btn-danger"
                        onclick="deleteConfirmation({{ $propiedad->id }})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


  

<div class="container-fluid">
    <div class="text-right">
        <div class="row">
            <div class="col-12">
                <a class="text-light" href="{{ route('propiedad.create') }}">
                    <button id="btn" role="button" type="submit" class="button-7">
                        Agregar nuevo</a></button>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- Eliminar --}}
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
                let _url = `/propiedad/${id}`;

                $.ajax({
                    type: 'DELETE',
                    url: _url,
                    data: {
                        _token: token
                    },
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