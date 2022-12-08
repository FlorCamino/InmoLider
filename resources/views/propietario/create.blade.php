@extends('layouts.base_admin')


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
                <h2 class="title">Agregar propietario</h2>
            </div>
        </div>
    </div>
    <!-- @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif -->
    <form action="{{ route('propietario.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control">
                    @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="apellido" class="form-control">
                    @error('apellido')
                    <div class="text-danger">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>DNI:</strong>
                    <input type="text" name="dni" class="form-control">
                    @error('dni')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Fecha de Nacimiento:</strong>
                    <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
                    @error('fechaNacimiento')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Teléfono:</strong>
                    <input type="text" name="telefono" class="form-control">
                    @error('telefono')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Domicilio:</strong>
                    <input type="text" name="domicilio" class="form-control">
                    @error('domicilio')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    <select class="form-control" name="idCiudad" id="idCiudad">
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
                    <strong>Descripción:</strong>
                    <input type="text" name="descripcion" class="form-control">
                    @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-end">
                    <a class="button-7" href="{{ route('propietario.index') }}"> Volver</a>
                    <button type="submit" class="button-7 ml-3">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection