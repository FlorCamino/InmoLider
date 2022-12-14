@extends('layouts.base_admin')

<style>
    #btn4 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="mb-2">
                <h2 class="title">Agregar ciudad</h2>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('ciudad.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                    @error('nombre')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pull-right">
                    <a class="button-7" href="{{ route('ciudad.index') }}"> Volver</a>
                    <button type="submit" class="button-7 ml-3">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection