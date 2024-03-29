@extends('layouts.base_admin')

<style>
    #btn5 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('content')

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
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="justify-content-center">
                <h2 class="title">Editar</h2>
            </div>
        </div>
    </div>
    <!-- @if (session('status'))
            <div class="alert alert-primary mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif -->
    <form action="{{ route('transaccion.update', $transaccion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Propiedad:</strong>
                    <select class="form-control" name="idPropiedad" id="idPropiedad">
                        <option value="">- Seleccionar -</option>
                        @foreach ($propiedades as $propiedad)
                        <option value="{{ $propiedad->id }}" {{ $propiedad->id == $propiedad->idPropiedad ? 'selected' :
                            '' }}>
                            {{ $propiedad->titulo }}</option>
                        @endforeach
                    </select>
                    @error('idPropiedad')
                    <div class="text-alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Usuario:</strong>
                    <select class="form-control" name="idUsuario" id="idUsuario">
                        <option value="">- Seleccionar -</option>
                        @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" {{ $usuario->id == $usuario->idUsuario ? 'selected' : '' }}>
                            {{ $usuario->nombre . ' ' . $usuario->apellido }}
                        </option>
                        @endforeach
                    </select>
                    @error('idUsuario')
                    <div class="text-alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo de transacción:</strong>
                    <select class="form-control" name="idUsuario" id="idUsuario">
                        <option value="">- Seleccionar -</option>
                        @foreach ($tiposTransaccion as $tipoTransaccion)
                        <option value="{{ $tipoTransaccion->id }}" {{ $tipoTransaccion->id ==
                            $tipoTransaccion->idTipoTransaccion ? 'selected' : '' }}>
                            {{ $tipoTransaccion->nombre }}
                        </option>
                        @endforeach
                    </select>
                    @error('idTipoTransaccion')
                    <div class="text-alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <strong>Desde:</strong>
                        <input type="text" name="desde" id="desde" class="form-control"
                            value="{{ $transaccion->desde }}">
                        @error('desde')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <strong>Hasta:</strong>
                        <input type="text" name="desde" id="desde" class="form-control"
                            value="{{ $transaccion->hasta }}">
                        @error('desde')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Valor:</strong>
                    <input class="form-control" id="valor" type="text" name="valor" value="{{ $transaccion->valor }}"
                        class="form-control" placeholder="valor">
                    @error('valor')
                    <div class="text-alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" id="descripcion" name="descripcion"
                        rows="4">{{ $transaccion->descripcion }}</textarea>
                    @error('descripcion')
                    <div class="text-alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-right">
                <div class="row">
                    <div class="col-12">
                        <button id="btn" type="submit" class="button-7 text-dark btn-primary ml-3">
                            <a type="link" class="text-light" href="{{ route('transaccion.index') }}"
                                enctype="multipart/form-data">
                                Volver</a>
                        </button>
                        <button type="submit" class="button-7 btn-primary ml-3">Guardar datos</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection