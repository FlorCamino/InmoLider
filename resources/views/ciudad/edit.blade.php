@extends('layouts.base_admin')

<style>
    #btn4 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('content')

{{-- Form --}}
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="justify-content-center">
                <h2 class="title">Editar</h2>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-primary mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('ciudad.update',$ciudad->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input class="form-control" id="nombre" type="text" name="nombre" value="{{ $ciudad->nombre }}"
                        class="form-control" placeholder="Nombre">
                    @error('nombre')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-right">
                <div class="row">
                    <div class="col-12">
                        <button id="btn" type="submit" class="button-7 text-dark btn-primary ml-3">
                            <a type="link" class="text-light" href="{{ route('ciudad.index') }}"
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