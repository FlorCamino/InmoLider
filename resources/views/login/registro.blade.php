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
</head>

<body>
    <form>
        <main>
            <div class="container">
                <form>
                    <img src="{{ asset('img/logo.jpg') }}" alt="Logo" width="120" height="90">
                    <h3>Bienvenido! Por favor, complete sus datos.</h3>
                    <div class="row">
                        <h5 class="subtitle"> <strong> Datos personales </strong> </h5>
                        <div class="col-sm-6 form-floating">
                            <input type="text" class="form-control form-control-orange" id="nombre"
                                placeholder="nombre">
                            <label for="nombre">Nombre/s</label>
                        </div>
                        <div class="invalid-feedback">
                            Nombre es un valor requerido.
                        </div>
                        <div class="col-sm-6 form-floating">
                            <input type="text" class="form-control form-control-orange" id="apellido"
                                placeholder="apellido">
                            <label for="apellido">Apellidos/s</label>
                        </div>
                        <div class="invalid-feedback">
                            Apellido es un valor requerido.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-floating">
                            <input type="text" class="form-control form-control-orange" id="dni"
                                placeholder="dni">
                            <label for="dni">DNI/DU/LE/LC/CI</label>
                        </div>
                        <div class="invalid-feedback">
                            DNI es un valor requerido.
                        </div>
                        <div class="col-sm-4 form-floating">
                            <input type="date" class="form-control form-control-orange" id="fechaNacimiento"
                                placeholder="fechaNaciemiento">
                            <label for="apellido">Fecha de nacimiento</label>
                        </div>
                        <div class="invalid-feedback">
                            Fecha de nacimiento es un valor requerido.
                        </div>
                        <div class="col-sm-4 form-floating">
                            <input type="number" class="form-control form-control-orange" id="edad"
                                placeholder="edad">
                            <label for="apellido">Edad</label>
                        </div>
                        <div class="invalid-feedback">
                            Edad es un valor requerido.
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="subtitle"> <strong> Datos de contacto </strong></h5>
                        <div class="col-sm-6 form-floating">
                            <input type="email" class="form-control form-control-orange" id="email"
                                placeholder="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="invalid-feedback">
                            Email es un valor requerido.
                        </div>
                        <div class="col-sm-6 form-floating">
                            <input type="text" class="form-control form-control-orange" id="telefono"
                                placeholder="telefono">
                            <label for="telefono">Teléfono</label>
                        </div>
                        <div class="invalid-feedback">
                            Teléfono es un valor requerido.
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="subtitle"> <strong>Datos de dirección </strong> </h5>
                        <div class="col-sm-4 form-floating">
                            <input type="direccion" class="form-control form-control-orange" id="direccion"
                                placeholder="direccion">
                            <label for="direccion">Dirección</label>
                        </div>
                        <div class="invalid-feedback">
                            Dirección es un valor requerido.
                        </div>
                        <div class="col-sm-4 form-floating">
                            <select class="form-select form-control form-control-orange" id="ciudad" required>
                                @foreach ($ciudades as $ciudad)
                                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <div class="invalid-feedback">
                                Seleccionar una opción.
                            </div>
                        </div>
                        <div class="col-md-4 form-floating">
                            <input type="text" class="form-control form-control-orange" id="CP"
                                placeholder="name@example.com">
                            <label for="CP">Código postal</label>
                        </div>
                        <div class="invalid-feedback">
                            Código postal requerido.
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn-form-control-registro form-control" type="submit">Crear cuenta</button>
                    </div>
            </div>
        </main>

        {{-- JS --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
        </script>

</body>

</html>
