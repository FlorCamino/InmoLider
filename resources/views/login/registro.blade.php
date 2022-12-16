<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InmoLider</title>

    <!-- Styles boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <main>
        <div class="container">
            <div class="card-body">
                <form method="POST" action="{{ route('validar-registro') }}">
                    @csrf
                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo" width="120" height="90">
                    <h3>Bienvenido! Por favor, complete sus datos.</h3>
                    <div class="row">
                        <h5 class="subtitle"> <strong> Datos personales </strong> </h5>
                        <div class="col-6 form-floating">
                            <input type="text" class="form-control form-control-orange" id="nombre" placeholder="nombre"
                                value="{{ old('nombre') }}">
                            <label for="nombre">Nombre/s</label>
                        </div>
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-6 form-floating">
                            <input type="text" class="form-control form-control-orange" id="apellido"
                                placeholder="apellido" value="{{ old('apellido') }}">
                            <label for="apellido">Apellidos/s</label>
                        </div>
                        <div class="invalid-feedback">
                            Apellido es un valor requerido.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 form-floating">
                            <input type="text" class="form-control form-control-orange" id="dni" placeholder="dni">
                            <label for="dni" value="{{ old('dni') }}">DNI/DU/LE/LC/CI</label>
                        </div>
                        @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-6 form-floating">
                            <input type="date" class="form-control form-control-orange" id="fechaNacimiento"
                                placeholder="fechaNaciemiento" value="{{ old('fechaNaciemiento') }}">
                            <label for="apellido">Fecha de nacimiento</label>
                        </div>
                        @error('fechaNacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <h5 class="subtitle"> <strong> Datos de contacto </strong></h5>
                        <div class="col-sm-6 form-floating">
                            <input type="email" class="form-control form-control-orange" id="email" placeholder="email"
                                value="{{ old('email') }}">
                            <label for="email">Email</label>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-sm-6 form-floating">
                            <input type="text" class="form-control form-control-orange" id="telefono"
                                placeholder="telefono" value="{{ old('telefono') }}">
                            <label for="telefono">Teléfono</label>
                        </div>
                        @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <h5 class="subtitle"> <strong>Datos de dirección </strong> </h5>
                        <div class="col-4 form-floating">
                            <input type="direccion" class="form-control form-control-orange" id="direccion"
                                placeholder="direccion" value="{{ old('direccion') }}">
                            <label for="direccion">Dirección</label>
                        </div>
                        @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-4 form-floating">
                            <select class="form-select form-control form-control-orange" id="ciudad" required>
                                @foreach ($ciudades as $ciudad)
                                <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="ciudad" class="form-label">Ciudad</label>
                            @error('idCiudad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4 form-floating">
                            <input type="text" class="form-control form-control-orange" id="CP"
                                placeholder="name@example.com" value="{{ old('CP') }}">
                            <label for="CP">Código postal</label>
                        </div>
                        @error('CP')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6 form-floating">
                            <input type="password" class="form-control form-control-orange" id="password"
                                placeholder="Password">
                            <label for="password">Contraseña</label>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="col-6 form-floating">
                            <input type="password" class="form-control form-control-orange" id="password-confirm"
                                placeholder="Confirmar contraseña" required autocomplete="new-password">
                            <label for="password-confirm">Confirmar contraseña</label>
                        </div>
                        @error('password-confirm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row align-left img-group">
                        <div class="col col-img">
                            <div class="form-group-img">
                                <strong>Foto perfil:</strong>
                                <input id="perfil-imagen" class="form-input" type="file" name="perfil-imagen"
                                    accept="image/*" onchange="readURL(this,null, 1);">
                                <input type="hidden" class="form-input" name="hidden_image1" id="hidden_image1">
                            </div>
                            <div class="form-group-img">
                                <img id="modal-preview1" src="https://via.placeholder.com/150" alt="Preview"
                                    class="form-group hidden" width="150" height="150">
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn-form-control-registro form-control" type="submit">Crear
                            cuenta</button>
                    </div>
            </div>
    </main>
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
</body>


{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>