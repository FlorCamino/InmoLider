@extends('layouts.base_admin')

<style>
    #btn5 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('content')

{{-- datetimepiker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#desde').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#hasta').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>

<div class="container mb-3">
    <h2 class="title mb-2">Agregar transacción</h2>
    <form action="{{ route('transaccion.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <strong>Propiedad:</strong>
            <select class="form-control" name="idPropiedad" id="idPropiedad">
                <option value="">- Seleccionar -</option>
                @foreach ($propiedades as $propiedad)
                <option value="{{ $propiedad->id }}">{{ $propiedad->titulo }}</option>
                @endforeach
            </select>
            @error('idPropiedad')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Usuario:</strong>
            <select class="form-control" name="idUsuario" id="idUsuario">
                <option value="">- Seleccionar -</option>
                @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre . ' ' . $usuario->apellido }}</option>
                @endforeach
            </select>
            @error('idUsuario')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Condición:</strong>
            <select class="form-control" name="idTipoTransaccion" id="idTipoTransaccion" style="pointer-events:none">
                <option value="">- Seleccionar -</option>
                @foreach ($tiposTransaccion as $tipoTransaccion)
                <option value="{{ $tipoTransaccion->id }}">{{ $tipoTransaccion->nombre }}</option>
                @endforeach
            </select>
            @error('idTipoTransaccion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <strong>Desde:</strong>
                    <input type="text" name="desde" id="desde" class="form-control">
                    @error('desde')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <strong>Hasta:</strong>
                    <input type="text" name="hasta" id="hasta" class="form-control">
                    @error('hasta')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <strong>Valor:</strong>
            <input type="text" name="valor" class="form-control">
            @error('valor')
            <div class="text-danger">{{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Descripción:</strong>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion"
                placeholder="Escriba aquí los detalles de la transacción" rows="4"></textarea>
            @error('descripcion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-end">
            <a class="button-7" href="{{ route('transaccion.index') }}"> Volver</a>
            <button type="submit" class="button-7 ml-3">Guardar</button>
        </div>
    </form>
</div>

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#idPropiedad').change(function () {
        var idPropiedad = $(this).val();
        if (idPropiedad) {
            $.ajax({
                'url': '/propiedad/getIdTipoTransaccion/' + idPropiedad,
                'type': 'GET',
                'data': {},
                success: function (idTipoTransaccion) {
                    $("#idTipoTransaccion").val(idTipoTransaccion);
                },
                error: function (response) {
                    alert('Error' + response);
                }
            });
        } else {
            $("#idTipoTransaccion").val(null);
        }
    })
</script>
@endsection