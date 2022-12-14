@extends('layouts.base_admin')

<style>
    #btn5 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('name', 'InmoLíder')

@section('content')

<div class="container">
    <h2 class="title">Transacciones</h2>

    <form style="position: relative">
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="number" class="form-control" disabled value="{{ $transaccion->id }}" />
                    <label class="form-label" for="form6Example1">Id transacción</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled
                        value="{{ $transaccion->TipoTransaccion->nombre }}" />
                    <label class="form-label" for="form6Example2">Condición</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled value="{{ $transaccion->idPropiedad }}" />
                    <label class="form-label" for="form6Example1">Id propiedad</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled value="{{ $transaccion->Propiedad->titulo }}" />
                    <label class="form-label" for="form6Example1">Título</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled
                        value="{{ $transaccion->Usuario->nombre . ' ' . $transaccion->Usuario->apellido }}" />
                    <label class="form-label" for="form6Example1">Nombre de usuario</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="datetime" class="form-control" disabled value="{{ $transaccion->fechaDeCreacion }}" />
                    <label class="form-label" for="form6Example2">Fecha y hora de creación</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline mb-4" style="margin-bottom: 0px">
                    <input type="text" id="form6Example1" class="form-control" disabled
                        value="{{ $transaccion->valor }}" />
                    <label class="form-label" for="form6Example1">Valor</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <textarea class="form-control" id="descripcion" name="descripcion" disabled
                        rows="4">{{ $transaccion->descripcion }}</textarea>
                    <label class="form-label" for="form6Example1">Descripción</label>
                </div>
            </div>
        </div>
        <!-- Submit button -->
        <div class="container-fluid">
            <div class="text-right">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('transaccion.create') }}">
                            <button type="submit" class="button-7 ml-3"> <a class="text-light"
                                    href="{{ route('transaccion.index') }}">Volver</a></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection