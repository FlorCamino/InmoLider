@extends('layouts.base_admin')

<style>
    #btn1 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('content')

<div class="container mt-2">

    <h2 class="title">Editar</h2>

    <form action="{{ route('propiedad.update',$propiedad->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <strong>Titulo de propiedad:</strong>
            <input class="form-control" id="titulo" type="text" name="titulo" value="{{ $propiedad->titulo }}"
                class="form-control" placeholder="Título">
            @error('titulo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Descripción:</strong>
            <textarea class="form-control" id="descripcion" name="descripcion"
                rows="4">{{$propiedad->descripcion}}</textarea>
            @error('descripcion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Dirección:</strong>
            <input class="form-control" id="direccion" type="text" name="direccion" value="{{ $propiedad->direccion }}"
                class="form-control" placeholder="Dirección">
            @error('direccion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Barrio:</strong>
            <input class="form-control" id="barrio" type="text" name="barrio" value="{{ $propiedad->barrio }}"
                class="form-control" placeholder="Barrio">
            @error('barrio')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Ciudad:</strong>
            <select class="form-control" name="idCiudad" id="idCiudad">
                @foreach($ciudades as $ciudad )
                <option value="{{$ciudad->id}}" {{ $ciudad->id == $propiedad->idCiudad ? 'selected':'' }} >{{
                    $ciudad->nombre }}</option>
                @endforeach
            </select>
            @error('idCiudad')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Código Postal:</strong>
            <input class="form-control" type="text" name="CP" id="CP" value="{{ $propiedad->CP }}" class="form-control"
                placeholder="Código Postal">
            @error('CP')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Propietario:</strong>
            <select class="form-control" name="idPropietario" id="idPropietario">
                @foreach($propietarios as $propietario )
                <option value="{{$propietario->id}}" {{ $propietario->id == $propiedad->idPropietario ?
                    'selected':'' }} >{{ $propietario->apellido . " " . $propietario->nombre}}</option>
                @endforeach
            </select>
            @error('idPropietario')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Cantidad de habitaciones:</strong>
            <input class="form-control" id="cantHab" type="text" name="cantHab" value="{{ $propiedad->cantHab }}"
                class="form-control" placeholder="Cantidad de habitaciones">
            @error('cantHab')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Cantidad de baños:</strong>
            <input class="form-control" type="text" id="cantBanios" name="cantBanios"
                value="{{ $propiedad->cantBanios }}" class="form-control" placeholder="Cantidad de baños">
            @error('cantBanios')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row text-center mb-4 mt-4">
            <div class="col-4">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="estacionamiento" type="checkbox" role="switch"
                        value="{{ ($propiedad->estacionamiento == 1) ? 'on' : '' }}">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Estacionamiento:</label>
                </div>
                @error('estacionamiento')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="estacionamiento" type="checkbox" role="switch"
                        value="{{ ($propiedad->aceptaMascotas == 1) ? 'on' : '' }}">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Acepta mascotas:</label>
                </div>
                @error('aceptaMascotas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="amoblado" type="checkbox" role="switch"
                        value="{{ ($propiedad->amoblado == 1) ? 'on' : '' }}">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Amoblado:</label>
                </div>
                @error('amoblado')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <strong>Tipo de transacción:</strong>
            <select class="form-control" name="idTipoTransaccion" id="idTipoTransaccion">
                @foreach($tiposTransaccion as $tipoTransaccion )
                <option value="{{$tipoTransaccion->id}}" {{ $tipoTransaccion->id ==
                    $propiedad->idTipoTransaccion ? 'selected':'' }} >{{ $tipoTransaccion->nombre }}</option>
                @endforeach
            </select>
            @error('idTipoTransaccion')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <strong>Costo:</strong>
            <input class="form-control" id="costo" type="text" name="costo" value="{{ $propiedad->costo }}"
                class="form-control" placeholder="Costo">
            @error('costo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-right mt-5">
            <div class="row">
                <div class="col-12">
                    <button id="btn" type="submit" class="button-7 text-dark btn-primary ml-3">
                        <a type="link" class="text-light" href="{{ route('propiedad.index') }}"
                            enctype="multipart/form-data">
                            Volver</a>
                    </button>
                    <button type="submit" class="button-7 btn-primary ml-3">Guardar datos</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection