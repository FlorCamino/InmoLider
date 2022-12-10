@extends('layouts.base_admin')

@section('content')

{{-- datetimepicker --}}
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

{{-- Form --}}
<div class="container mt-2">
    <div class="justify-content-center">
        <h2 class="title">Editar</h2>
    </div>
    <form action="{{ route('propietario.update',$propietario->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-12 mb-4">
            <strong>Nombre:</strong>
            <input class="form-control" id="nombre" type="text" name="nombre" value="{{ $propietario->nombre }}"
                class="form-control" placeholder="Nombre">
            @error('nombre')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Apellido:</strong>
            <input class="form-control" id="apellido" type="text" name="apellido" value="{{ $propietario->apellido }}"
                class="form-control" placeholder="Apellido">
            @error('apellido')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>DNI:</strong>
            <input class="form-control" id="dni" type="text" name="dni" value="{{ $propietario->dni }}"
                class="form-control" placeholder="DNI">
            @error('dni')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Fecha de Nacimiento:</strong>
            <input class="form-control" type="text" name="fechaNacimiento" id="fechaNacimiento"
                value="{{ $propietario->fechaNacimiento }}" class="form-control" placeholder="Fecha de nacimiento">
            @error('fechaNacimiento')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Email:</strong>
            <input class="form-control" id="email" type="text" name="email" value="{{ $propietario->email }}"
                class="form-control" placeholder="email">
            @error('email')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Teléfono:</strong>
            <input class="form-control" id="telefono" type="text" name="telefono" value="{{ $propietario->telefono }}"
                class="form-control" placeholder="telefono">
            @error('telefono')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Domicilio:</strong>
            <input class="form-control" type="text" name="domicilio" value="{{ $propietario->domicilio }}"
                class="form-control" placeholder="domicilio">
            @error('domicilio')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Ciudad:</strong>
            <select class="form-control" name="idCiudad" id="idCiudad">
                @foreach($ciudades as $ciudad )
                <option value="{{$ciudad->id}}" {{ $ciudad->id == $propietario->idCiudad ? 'selected':'' }} >{{
                    $ciudad->nombre }}</option>
                @endforeach
            </select>
            @error('ciudad')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Código Postal:</strong>
            <input class="form-control" id="CP" type="text" name="CP" value="{{ $propietario->CP }}"
                class="form-control" placeholder="CP">
            @error('CP')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-4">
            <strong>Descripción:</strong>
            <input class="form-control" id="descripcion" type="text" name="descripcion"
                value="{{ $propietario->descripcion }}" class="form-control" placeholder="Descripción">
            @error('descripcion')
            <div class="text-alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-right">
            <div class="col-12 mt-4">
                <button id="btn" type="submit" class="button-7 btn-primary ml-3">
                    <a type="link" class="text-light" href="{{ route('propietario.index') }}"
                        enctype="multipart/form-data">
                        Volver</a>
                </button>
                <button type="submit" class="button-7 btn-primary ml-3">Guardar datos</button>
            </div>
        </div>
    </form>
</div>
@endsection