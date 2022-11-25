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
            <div class="mb-2">
                <h2 class="title">Agregar usuario</h2>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('usuario.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Nombre/s:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        @error('nombre')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <strong>Apellido/s:</strong>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                        @error('apellido')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                        </div>
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
                        <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" placeholder="Fecha nacimiento">
                        @error('fechaNacimiento')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror 
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                        @error('usuario')
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
                    <strong>Dirección:</strong>
                        <input type="text" name="direccion" class="form-control" placeholder="Dirección">
                        @error('direccion')
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
                <div class="text-end">
                    <a class="button-7" href="{{ route('usuario.index') }}"> Volver</a>
                    <button type="submit" class="button-7 ml-3">Guardar</button>
                </div>
            </div> 
        </div>   
    </form>
</div>

@endsection 

