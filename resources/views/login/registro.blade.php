<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoLider</title>
</head>

<body>
    <form action="{{route('login.store')}}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label>Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <br>
        <label>DNI</label>
        <input type="text" name="dni" id="dni">
        <br>
        <label>Fecha de Nacimiento</label>
        <input type="text" name="fechaNacimiento" id="fechaNacimiento">
        <br>
        <label>Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label>Telefono</label>
        <input type="text" name="telefono" id="telefono">
        <br>
        <label>Direccion</label>
        <input type="text" name="direccion" id="direccion">
        <br>
        <label>Ciudad</label>
        @foreach($ciudades as $ciudad)
        <select type="text" name="idCiudad" id="idCiudad">
            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
        </select>
        @endforeach
        <br>
        <label>Código Postal</label>
        <input type="text" name="CP" id="CP">
        <br>
        <label>Contraseña</label>
        <input type="text" name="password" id="password">
        <br>
        <label>Confirmar contraseña</label>
        <input type="text" name="confirmar-contraseña" id="confirmar-contraseña">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>