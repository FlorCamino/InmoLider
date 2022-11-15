@extends('layouts.base_admin')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-secondary" href="{{ route('ciudad.index') }}" enctype="multipart/form-data">
                        Volver</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('ciudad.update', $ciudad->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" value="{{ $ciudad->nombre }}" class="form-control"
                            placeholder="Nombre ciudad">
                        @error('nombre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            <input type="text" name="descripcion" value="{{ $propiedad->descripcion }}"  class="form-control" placeholder="Descripción">
                            @error('descripcion')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Fecha de registro:</strong>
                            <input type="text" name="fechaCreacion" class="form-control" placeholder="FechaCreación">
                            @error('fechaCeacion')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            <input type="text" name="direccion" class="form-control" placeholder="Dirección">
                            @error('direccion')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Barrio:</strong>
                            <input type="text" name="barrio" class="form-control" placeholder="Barrio">
                            @error('barrio')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                            @error('ciudad')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Código postal:</strong>
                            <input type="text" name="CP" class="form-control" placeholder="CódigoPostal">
                            @error('CP')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            <input type="text" name="propietario" class="form-control" placeholder="Propietario">
                            @error('propietario')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Cantidad de habitaciones:</strong>
                            <input type="text" name="cantHab" class="form-control" placeholder="CantidadHabitaciones">
                            @error('cantHab')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Cantidad de baños:</strong>
                            <input type="text" name="cantBanios" class="form-control" placeholder="CantidadBaños">
                            @error('cantBanios')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Estacionamiento:</strong>
                            <input type="text" name="estacionamiento" class="form-control" placeholder="Estacionamiento">
                            @error('estacionamiento')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Acepta mascotas:</strong>
                            <input type="text" name="aceptaMascotas" class="form-control" placeholder="AceptaMascotas">
                            @error('aceptaMascotas')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Amoblado:</strong>
                            <input type="text" name="amoblado" class="form-control" placeholder="Amoblado">
                            @error('amoblado')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Tipo de transacción:</strong>
                            <input type="text" name="tipoTransaccion" class="form-control" placeholder="TipoTransacción">
                            @error('tipoTransaccion')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Período:</strong>
                            <input type="text" name="periodo" class="form-control" placeholder="Período">
                            @error('periodo')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            <input type="text" name="costo" class="form-control" placeholder="Costo">
                            @error('costo')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <strong>Estado de propiedad:</strong>
                            <input type="text" name="estadoPropiedad" class="form-control" placeholder="EstadoPropiedad">
                            @error('estadoPropiedad')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary ml-3">Guardar</button>
                </div>
                <button type="submit" class="btn btn-secondary ml-3">Actualizar</button>
            </div>
        </form>
    </div>
@endsection