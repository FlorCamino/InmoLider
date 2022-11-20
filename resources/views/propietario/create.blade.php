{{-- @extends('layouts.base_admin')


@section('content') --}}
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Agregar propietario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('propietario.index') }}"> Volver</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('propietario.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    @error('nombre')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                         @error('apellido')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>DNI:</strong>
                        <input type="text" name="dni" class="form-control" placeholder="DNI">
                         @error('dni')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>Fecha de Nacimiento:</strong>
                        <input type="text" name="fechaNacimiento" class="form-control" placeholder="Fecha nacimiento">
                         @error('fechaNacimiento')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" class="form-control" placeholder="email">
                         @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>Teléfono:</strong>
                        <input type="text" name="telefono" class="form-control" placeholder="telefono">
                         @error('telefono')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>Domicilio:</strong>
                        <input type="text" name="domicilio" class="form-control" placeholder="domicilio">
                         @error('domicilio')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>Ciudad:</strong>
                        <select class="form-control" name="idCiudad" id="idCiudad">
                            @foreach($ciudades as $ciudad )
                               <option value="{{$ciudad->id}}">{{ $ciudad->nombre }}</option>
                            @endforeach

                        </select>
                        {{-- <input type="text" name="nombre" class="form-control" placeholder="ciudad"> --}}
                         @error('ciudad')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>Código Postal:</strong>
                        <input type="text" name="CP" class="form-control" placeholder="CP">
                        @error('CP')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <strong>Descripción:</strong>
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripción">
                         @error('descripcion')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                    </div>
                <div>
                    <button type="submit" class="btn btn-success ml-3">Guardar</button>
                </div>
            </div>
        </div>
    </form>
{{-- @endsection --}}