@extends('layouts.base_admin')

@section('name', 'InmoLíder')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

{{-- Linea de código --}}
<div class="container-fluid">
    <h2 class="title">Listado de transacciones</h2>

    <table class="table table-striped table-hover">

        <thead class="justify-content-center">
            <tr>
                <th scope="col-3">Id de transacción</th>
                <th scope="col-3">Id - titulo de propiedad</th>
                <th scope="col-2">Usuario</th>
                <th scope="col-2">Condición</th>
                <th scope="col-2">Fecha de creación</th>
                <th scope="col-2">Valor</th>
                <th scope="col-2">Descripción</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($transacciones as $transaccion)
            <tr>
                <td>{{ $transaccion->id }}</td>
                <td>{{ $transaccion->idPropiedad . ' - ' . $transaccion->Propiedad->titulo }}</td>
                <td>{{ $transaccion->Usuario->nombre . ' ' . $transaccion->Usuario->apellido }}</td>
                <td>{{ $transaccion->TipoTransaccion ? $transaccion->TipoTransaccion->nombre : '' }}</td>
                <td>{{ $transaccion->fechaCreacion }}</td>
                <td>{{ $transaccion->valor }}</td>
                <td>{{ $transaccion->descripcion }}</td>
                <td>
                    <a href="{{ route('transaccion.show', $transaccion) }}">
                        <button type="button" class="icon btn-labeled btn-primary"><i class="fa fa-eye"></i></button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('transaccion.edit', $transaccion) }}">
                        <button type="button" class="icon btn-labeled btn-primary"><i class="fa fa-pencil"></i></button>
                    </a>
                </td>
                <td>
                    <button type="button" class="icon btn-labeled btn-danger"
                        onclick="deleteConfirmation({{ $transaccion->id }})"><i class="fa fa-trash"></i></button>
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
                <a class="text-light" href="{{ route('transaccion.create') }}">
                    <button id="btn" role="button" type="submit" class="button-7">
                        Agregar nuevo</a></button>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- Código para eliminar --}}
<script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: "Eliminar?",
            icon: 'question',
            text: "¿Estas seguro que deseas eliminar esta transacción?",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Si",
            cancelButtonText: "No",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                let token = $('meta[name="csrf-token"]').attr('content');
                let _url = `/transaccion/${id}`;

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