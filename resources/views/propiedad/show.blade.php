@extends('layouts.base_admin')

@section('content')
    <h2 class="text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Detalle de
        propiedad</h2>
    <form>
        <div>
            <label class="form-label"> <strong> Identificación </strong> </label>
            <input class="form-control" type="text" name="id" value="{{ $ciudad->id }}">
        </div>
        <div>
            <label class="form-label"> <strong> Nombre </strong> </label>
            <input class="form-control"type="text" name="nombre" value="{{ $propiedad->descripcion }}">
        </div>
        <div class="container">
            <div class="row col-2 text-left">
                <a class="text-black " href="{{ route('propiedad.index') }}">Volver</a>
            </div>
        </div>
    </form>
@endsection

