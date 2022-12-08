@extends('layouts.base_admin')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="mb-2">
                <h2 class="title">Agregar transacción</h2>
            </div>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('transaccion.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>Propiedad:</strong>
                <select class="form-control" name="idPropiedad" id="idPropiedad">
                    @foreach ($propiedades as $propiedad)
                    <option value="{{ $propiedad->id }}">{{ $propiedad->titulo }}</option>
                    @endforeach
                </select>
                @error('idPropiedad')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <strong>Usuario:</strong>
                <select class="form-control" name="idUsuario" id="idUsuario">
                    @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre . ' ' . $usuario->apellido }}</option>
                    @endforeach
                </select>
                @error('idUsuario')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <strong>Condición:</strong>
                <select class="form-control" name="idTipoTransaccion" id="idTipoTransaccion">
                    @foreach ($tiposTransaccion as $tipoTransaccion)
                    <option value="{{ $tipoTransaccion->id }}">{{ $tipoTransaccion->nombre }}</option>
                    @endforeach
                </select>
                @error('idTipoTransaccion')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <strong>Valor:</strong>
                <input type="text" name="valor" class="form-control">
                @error('valor')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <strong>Descripción:</strong>
                <textarea type="text" class="form-control" id="descripcion" name="descripcion"
                    placeholder="Escriba aquí los detalles de la transacción" rows="4"></textarea>
                @error('descripcion')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-end">
                <a class="button-7" href="{{ route('transaccion.index') }}"> Volver</a>
                <button type="submit" class="button-7 ml-3">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection