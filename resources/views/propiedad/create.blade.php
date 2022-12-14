@extends('layouts.base_admin')

<style>
    #btn1 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('content')

<div class="container mt-2">
    <h2 class="title">Agregar propiedad</h2>
    <form action="{{ route('propiedad.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <strong>Título:</strong>
            <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ old('titulo') }}">
            @error('titulo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Descripción:</strong>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion"
                rows="4">{{ old('descripcion') }}</textarea>
            @error('descripcion')
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
            <strong>Barrio:</strong>
            <input type="text" name="barrio" class="form-control" value="{{ old('barrio') }}">
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
            <input type="text" name="CP" class="form-control" value="{{ old('CP') }}">
            @error('CP')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <strong>Propietario:</strong>
            <select class="form-control" name="idPropietario" id="idPropietario" value="{{ old('idPropietario') }}">
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
                    <input type="text" name="cantHab" class="form-control" value="{{ old('cantHab') }}">
                    @error('cantHab')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <strong>Cantidad de baños:</strong>
                    <input type="text" name="cantBanios" class="form-control" value="{{ old('cantBanios') }}">
                    @error('cantBanios')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row text-center mb-3 mt-3">
            <div class="col-4">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="estacionamiento" type="checkbox" role="switch"
                        value="{{ old('estacionamiento') }}">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Estacionamiento</label>
                </div>
                @error('estacionamiento')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="aceptaMascotas" type="checkbox" role="switch">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Acepta Mascota</label>
                </div>
                @error('aceptaMascotas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <div class="form-check form-switch">
                    <input class="form-check-input" name="amoblado" type="checkbox" role="switch"
                        value="{{ old('amoblado') }}">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Amoblado</label>
                </div>
                @error('amoblado')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <strong>Tipo de transacción:</strong>
            <select class="form-control" name="idTipoTransaccion" id="idTipoTransaccion"
                value="{{ old('idTipoTransaccion') }}">
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
            <input type="text" name="costo" class="form-control" value="{{ old('costo') }}">
            @error('costo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row img-group">
            <div class="col col-img">
                <div class="form-group-img">
                    <strong>Imagen 1:</strong>
                    <input id="image1" class="form-input" type="file" name="image1" accept="image/*"
                        onchange="readURL(this,null, 1);">
                    <input type="hidden" class="form-input" name="hidden_image1" id="hidden_image1">
                </div>
                <div class="form-group-img">
                    <img id="modal-preview1" src="https://via.placeholder.com/150" alt="Preview"
                        class="form-group hidden" width="150" height="150">
                </div>
            </div>
            <div class="col col-img">
                <div class="form-group-img">
                    <strong>Imagen 2:</strong>
                    <input id="image2" type="file" name="image2" accept="image/*" onchange="readURL(this,null, 2);">
                    <input type="hidden" name="hidden_image1" id="hidden_image2">
                </div>
                <div class="form-group-img">
                    <img id="modal-preview2" src="https://via.placeholder.com/150" alt="Preview"
                        class="form-group hidden" width="150" height="150">
                </div>
            </div>
        </div>
        <div class="row img-group">
            <div class="col col-img">
                <div class="form-group-img">
                    <strong>Imagen 3:</strong>
                    <input id="image1" type="file" name="image3" accept="image/*" onchange="readURL(this,null, 3);">
                    <input type="hidden" name="hidden_image1" id="hidden_image3">
                </div>
                <div class="form-group-img">
                    <img id="modal-preview3" src="https://via.placeholder.com/150" alt="Preview"
                        class="form-group hidden" width="150" height="150">
                </div>
            </div>
            <div class="col col-img">
                <div class="form-group-img">
                    <strong>Imagen 4:</strong>
                    <input id="image4" type="file" name="image4" accept="image/*" onchange="readURL(this,null, 4);">
                    <input type="hidden" name="hidden_image1" id="hidden_image4">
                </div>
                <div class="form-group-img">
                    <img id="modal-preview4" src="https://via.placeholder.com/150" alt="Preview"
                        class="form-group hidden" width="150" height="150">
                </div>
            </div>
        </div>
        <div class="text-end">
            <a class="button-7" href="{{ route('propiedad.index') }}"> Volver</a>
            <button type="submit" class="button-7 ml-3">Guardar</button>
        </div>
    </form>
</div>
<script>
    function readURL(input, id, index) {
        id = id || '#modal-preview' + index;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(id).attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
            $('#modal-preview' + index).removeClass('hidden');
            $('#start').hide();
        }
    }
</script>

@endsection