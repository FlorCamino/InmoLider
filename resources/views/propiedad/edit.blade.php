@extends('layouts.base_admin')

@section('content')

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
    <form action="{{ route('propiedad.update',$propiedad->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo de propiedad:</strong>
                    <input class="form-control" id="titulo" type="text" name="titulo" value="{{ $propiedad->titulo }}"
                        class="form-control" placeholder="Título">
                    @error('titulo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" id="descripcion" name="descripcion"
                        rows="4">{{$propiedad->descripcion}}</textarea>
                    @error('descripcion')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dirección:</strong>
                    <input class="form-control" id="direccion" type="text" name="direccion"
                        value="{{ $propiedad->direccion }}" class="form-control" placeholder="Dirección">
                    @error('direccion')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Barrio:</strong>
                    <input class="form-control" id="barrio" type="text" name="barrio" value="{{ $propiedad->barrio }}"
                        class="form-control" placeholder="Barrio">
                    @error('barrio')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    <select class="form-control" name="idCiudad" id="idCiudad">
                        @foreach($ciudades as $ciudad )
                        <option value="{{$ciudad->id}}" {{ $ciudad->id == $propiedad->idCiudad ? 'selected':'' }} >{{
                            $ciudad->nombre }}</option>
                        @endforeach
                    </select>
                    @error('idCiudad')
                    <div class="alert text-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código Postal:</strong>
                    <input class="form-control" type="text" name="CP" id="CP" value="{{ $propiedad->CP }}"
                        class="form-control" placeholder="Código Postal">
                    @error('CP')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
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
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cantidad de habitaciones:</strong>
                    <input class="form-control" id="cantHab" type="text" name="cantHab"
                        value="{{ $propiedad->cantHab }}" class="form-control" placeholder="Cantidad de habitaciones">
                    @error('cantHab')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cantidad de baños:</strong>
                    <input class="form-control" type="text" id="cantBanios" name="cantBanios"
                        value="{{ $propiedad->cantBanios }}" class="form-control" placeholder="Cantidad de baños">
                    @error('cantBanios')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estacionamiento:</strong>
                    <input class="form-control" type="text" id="estacionamiento" name="estacionamiento"
                        value="{{ $propiedad->estacionamiento }}" class="form-control" placeholder="Estacionamiento">
                    @error('estacionamiento')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Acepta Mascotas:</strong>
                    <input class="form-control" type="text" id="aceptaMascotas" name="aceptaMascotas"
                        value="{{ $propiedad->aceptaMascotas }}" class="form-control" placeholder="Acepta Mascotas">
                    @error('aceptaMascotas')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>amoblado:</strong>
                    <input class="form-control" type="text" id="amoblado" name="amoblado"
                        value="{{ $propiedad->amoblado }}" class="form-control" placeholder="Estacionamiento">
                    @error('amoblado')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo de transacción:</strong>
                    <select class="form-control" name="idTipoTransaccion" id="idTipoTransaccion">
                        @foreach($tiposTransaccion as $tipoTransaccion )
                        <option value="{{$tipoTransaccion->id}}" {{ $tipoTransaccion->id ==
                            $propiedad->idTipoTransaccion ? 'selected':'' }} >{{ $tipoTransaccion->nombre }}</option>
                        @endforeach
                    </select>
                    @error('idTipoTransaccion')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Costo:</strong>
                    <input class="form-control" id="costo" type="text" name="costo" value="{{ $propiedad->costo }}"
                        class="form-control" placeholder="Costo">
                    @error('costo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado de propiedad:</strong>
                    <select class="form-control" name="idEstadoPropiedad" id="idEstadoPropiedad">
                        @foreach($estadosPropiedad as $estadoPropiedad )
                        <option value="{{$estadoPropiedad->id}}" {{ $estadoPropiedad->id ==
                            $propiedad->idEstadoPropiedad ? 'selected':'' }} >{{ $estadoPropiedad->nombre }}</option>
                        @endforeach
                    </select>
                    @error('idEstadoPropiedad')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-right">
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
        </div>
    </form>
</div>
@endsection