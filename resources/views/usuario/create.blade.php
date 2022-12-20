@extends('layouts.base_admin')

<style>
    #btn3 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#fechaNacimiento').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="mb-2">
                <h2 class="title">Agregar usuario</h2>
            </div>
        </div>
    </div>
    <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre/s:</strong>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                    @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Apellido/s:</strong>
                    <input type="text" name="apellido" class="form-control" value="{{ old('apellido') }}">
                    @error('apellido')
                    <div class="text-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>DNI:</strong>
                    <input type="text" name="dni" class="form-control" value="{{ old('dni') }}">
                    @error('dni')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Fecha de Nacimiento:</strong>
                    <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control"
                        value="{{ old('fechaNacimiento') }}">
                    @error('fechaNacimiento')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Teléfono:</strong>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                    @error('telefono')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Dirección:</strong>
                    <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                    @error('direccion')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    <select class="form-control" name="idCiudad" id="idCiudad">
                        <option value=""> -Seleccionar- </option>
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
                    <input type="text" name="CP" class="form-control" value="{{ old('CP') }}">
                    @error('CP')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Rol:</strong>
                    <select class="form-control" name="idRol" id="idRol">
                        <option value="">- Seleccionar -</option>
                        @foreach($roles as $rol )
                        <option value="{{$rol->id}}">{{ $rol->nombre }}
                        </option>
                        @endforeach
                    </select>
                    @error('idRol')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Contraseña:</strong>
                    <input type="text" name="password" class="form-control">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Confirmar contraseña:</strong>
                    <input type="text" name="confirmar-contraseña" class="form-control">
                    @error('confirmar-contraseña')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-end">
                    <a class="button-7" href="{{ route('usuario.index') }}"> Volver</a>
                    <button type="submit" class="button-7 ml-3">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection