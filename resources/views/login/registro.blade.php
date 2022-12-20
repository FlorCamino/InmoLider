@extends('layouts.login')

@section('content')

<style>
    #boton-reg {
        background-color: #f55d26;
        border-color: orangered;
    }

    #boton-reg a {
        color: white;
    }
</style>

<div class="container card-body">
    <form class="form" action="{{route('registro.store')}}" method="POST">
        @csrf
        <img class="logo-bi" src="{{ asset('img/logo.jpg') }}" alt="Logo" width="120" height="90">
        <h3>Bienvenido! Por favor, complete sus datos.</h3>
        <div class="row">
            <h5 class="subtitle"> <strong> Datos personales </strong> </h5>
            <div class="col-6 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="nombre" id="nombre" placeholder="Nombre"
                    value="{{ old('nombre') }}">
                <label class="form-reg-label" for="nombre">Nombre</label>
                @error('nombre')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="apellido" id="apellido"
                    placeholder="Apellido" value="{{ old('apellido') }}">
                <label class=" form-reg-label" for="apellido">Apellido</label>
                @error('apellido')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="dni" id="dni" value="{{ old('dni')}}"
                    placeholder="DNI">
                <label class=" form-reg-label" for="dni">DNI/DU/LE/LC/CI</label>
                @error('dni')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 form-floating form-floating-reg">
                <input type="date" class="form-control form-reg-orange" name="fechaNacimiento" id="fechaNacimiento"
                    placeholder=" Fecha de nacimiento" value="{{ old('fechaNacimiento') }}">
                <label class=" form-reg-label" for="fechaNacimiento">Fecha de Nacimiento</label>
            </div>
        </div>
        <div class="row">
            <h5 class="subtitle"> <strong> Datos de contacto </strong></h5>
            <div class="col-sm-6 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="email" id="email" placeholder="email"
                    value="{{ old('email') }}">
                <label class=" form-reg-label" for="email">Email</label>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="telefono" id="telefono"
                    placeholder="telefono" value="{{ old('telefono') }}">
                <label class=" form-reg-label" for="telefono">Telefono</label>
                @error('telefono')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <h5 class="subtitle"> <strong>Datos de dirección </strong> </h5>
            <div class="col-4 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="direccion" id="direccion"
                    placeholder="Dirección" value="{{ old('direccion') }}">
                <label class=" form-reg-label" for="direccion">Dirección</label>
                @error('direccion')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4 form-floating form-floating-reg">
                <select type="text" class="form-select form-control form-reg-orange" name="idCiudad" id="idCiudad">
                    @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                    @endforeach
                </select>
                <label class=" form-reg-label" for="idCiudad">Ciudad</label>
                @error('idCiudad')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="CP" id="CP" placeholder="name@example.com"
                    value="{{ old('CP') }}">
                <label class=" form-reg-label" for="CP">Código Postal</label>
                @error('CP')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="password" id="password"
                    placeholder="Password">
                <label class=" form-reg-label" for="password">Contraseña</label>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 form-floating form-floating-reg">
                <input type="text" class="form-control form-reg-orange" name="confirmar-contraseña"
                    id="confirmar-contraseña" placeholder="confirmar-contraseña">
                <label class=" form-reg-label" for="confirmar-contraseña-reg">Confirmar contraseña</label>
                @error('confirmar-contraseña')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col col-img">
                <div class="form-group-img">
                    <strong>Foto perfil:</strong>
                    <input id="perfil-imagen" class="form-input" type="file" name="perfil-imagen" accept="image/*"
                        onchange="readURL(this,null, 1);">
                    <input type="hidden" class="form-input" name="hidden_image1" id="hidden_image1">
                </div>
                <div class="form-floating form-group-img">
                    <img id="modal-preview1" src="https://via.placeholder.com/150" alt="Preview"
                        class="form-group hidden" width="150" height="150">
                </div>
            </div>
        </div>
        <div class="text-end">
            <button class="btn-form-control-registro form-control" type="submit">Crear
                cuenta</button>
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

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection