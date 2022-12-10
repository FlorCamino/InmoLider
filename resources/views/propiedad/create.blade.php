@extends('layouts.base_admin')


@section('content')

<div class="container mt-2">
    <h2 class="title">Agregar propiedad</h2>
    <form action="{{ route('propiedad.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <strong>Título:</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Título">
            @error('titulo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Descripción:</strong>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion"
                placeholder="Escriba aquí los detalles de la propiedad" rows="4"></textarea>
            @error('descripcion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Dirección:</strong>
            <input type="text" name="direccion" class="form-control">
            @error('direccion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Barrio:</strong>
            <input type="text" name="barrio" class="form-control">
            @error('barrio')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Ciudad:</strong>
            <select class="form-control" name="idCiudad" id="idCiudad">
                <option value="">- Seleccionar -</option>
                @foreach($ciudades as $ciudad )
                <option value="{{$ciudad->id}}">{{ $ciudad->nombre }}</option>
                @endforeach
            </select>
            @error('idCiudad')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Código Postal:</strong>
            <input type="text" name="CP" class="form-control">
            @error('CP')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Propietario:</strong>
            <select class="form-control" name="idPropietario" id="idPropietario">
                <option value="">- Seleccionar -</option>
                @foreach($propietarios as $propietario )
                <option value="{{$propietario->id}}">{{ $propietario->nombre . ' ' . $propietario->apellido }}
                </option>
                @endforeach
            </select>
            @error('idPropietario')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-6">
                <div class="form-group">
                    <strong>Cantidad de habitaciones:</strong>
                    <input type="text" name="cantHab" class="form-control">
                    @error('cantHab')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <strong>Cantidad de baños:</strong>
                    <input type="text" name="cantBanios" class="form-control">
                    @error('cantBanios')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-4">
                <div class="form-check justify-content-center form-switch">
                    <input class="form-check-input" name="estacionamiento" type="checkbox" role="switch">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Estacionamiento</label>
                </div>
                @error('estacionamiento')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <div class="form-check justify-content-center form-switch">
                    <input class="form-check-input" name="aceptaMascotas" type="checkbox" role="switch">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Acepta Mascota</label>
                </div>
                @error('aceptaMascotas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <div class="form-check justify-content-center form-switch">
                    <input class="form-check-input" name="amoblado" type="checkbox" role="switch">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Amoblado</label>
                </div>
                @error('amoblado')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <strong>Tipo de transacción:</strong>
            <select class="form-control" name="idTipoTransaccion" id="idTipoTransaccion">
                <option value="">- Seleccionar -</option>
                @foreach($tiposTransaccion as $tipoTransaccion )
                <option value="{{$tipoTransaccion->id}}">{{ $tipoTransaccion->nombre }}</option>
                @endforeach
            </select>
            @error('idTipoTransaccion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Costo:</strong>
            <input type="text" name="costo" class="form-control">
            @error('costo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-end">
            <a class="button-7" href="{{ route('propiedad.index') }}"> Volver</a>
            <button type="submit" class="button-7 ml-3">Guardar</button>
        </div>
    </form>
</div>

@endsection