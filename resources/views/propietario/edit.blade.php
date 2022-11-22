@extends('layouts.base_admin')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#fechaNacimiento').datetimepicker({
    format: 'YYYY-MM-DD'
    });
    });
</script>    
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="justify-content-center">
                <h2 id="h2">Editar</h2>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-primary mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('propietario.update',$propietario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input id="valEdit" type="text" name="nombre" value="{{ $propietario->nombre }}" class="form-control"
                        placeholder="Nombre">
                    @error('nombre')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input id="valEdit" type="text" name="apellido" value="{{ $propietario->apellido }}" class="form-control"
                        placeholder="Apellido">
                    @error('apellido')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>DNI:</strong>
                    <input id="valEdit" type="text" name="dni" value="{{ $propietario->dni }}" class="form-control"
                        placeholder="DNI">
                    @error('dni')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de Nacimiento:</strong>
                    <input id="valEdit" type="text" name="fechaNacimiento" id="fechaNacimiento" value="{{ $propietario->fechaNacimiento }}" class="form-control"
                        placeholder="Fecha nacimiento">
                    @error('fechaNacimiento')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input id="valEdit" type="text" name="email" value="{{ $propietario->email }}" class="form-control"
                        placeholder="email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teléfono:</strong>
                    <input id="valEdit" type="text" name="telefono" value="{{ $propietario->telefono }}" class="form-control"
                        placeholder="telefono">
                    @error('telefono')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Domicilio:</strong>
                    <input id="valEdit" type="text" name="domicilio" value="{{ $propietario->domicilio }}" class="form-control"
                        placeholder="domicilio">
                    @error('domicilio')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    <select id="valEdit" class="form-control" name="idCiudad" id="idCiudad">
                        @foreach($ciudades as $ciudad )
                           <option value="{{$ciudad->id}}" {{ $ciudad->id == $propietario->idCiudad ? 'selected':'' }} >{{ $ciudad->nombre }}</option>
                        @endforeach
                    </select>
                    @error('ciudad')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código Postal:</strong>
                    <input id="valEdit" type="text" name="CP" value="{{ $propietario->CP }}" class="form-control"
                        placeholder="CP">
                    @error('CP')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <input id="valEdit" type="text" name="descripcion" value="{{ $propietario->descripcion }}" class="form-control"
                        placeholder="Descripción">
                    @error('descripcion')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-right">
                <div class="row">
                    <div class="col-12">
                        <button id="btn" type="submit" class="btn text-dark btn-primary ml-3" style="background-color: #1565c0 "><a  type="link"class="text-dark" href="{{ route('propietario.index') }}" enctype="multipart/form-data">
                    Volver</a></button>
            <button id="btn" type="submit" class="btn text-dark btn-primary ml-3" style="background-color: #1565c0 ">Guardar datos</button>
        </div>
    </div>
</div>
</div>
</form>
</div>

@endsection