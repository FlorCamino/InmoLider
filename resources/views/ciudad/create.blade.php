@extends('layouts.plantilla')
@include('layouts.adm_navbar')
@section('name')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar ciudad</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-secondary" href="{{ route('ciudad.index') }}"> Volver</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('ciudad.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre ciudad:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre ciudad">
                        @error('nombre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary ml-3">Guardar</button>
            </div>
        </form>
    </div>
@endsection
