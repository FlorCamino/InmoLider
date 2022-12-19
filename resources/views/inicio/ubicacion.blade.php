@extends('layouts.base_user')

@section('content')

<body>
    <div class="container marketing">
        <div class="ubicacion">
            <div class="col-4">
                <div class="v-line1">
                    <h3 class="heading">Sede Río Grande<span class="text-muted"></span></h3>
                    <p class="lead">Nuestra sede oficial de Río Grande
                    <ul class="list-datos">
                        <li class="group-item">Dirección: Islas Malvinas</li>
                        <li class="group-item">Altura: 1834</li>
                        <li class="group-item">Esquina con: Guayaquill</li>
                        <li class="group-item">Lunes a Viernes: 10:00hs a 22:00hs</li>
                        <li class="group-item">Sábados: 15:00hs a 20:00hs</li>
                    </ul>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357.0077387446163!2d-67.73087994879334!3d-53.789349810913535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbc4b16707ca18f61%3A0xaace43688bcd81a5!2sIslas%20Malvinas%201834%2C%20R%C3%ADo%20Grande%2C%20Tierra%20del%20Fuego!5e0!3m2!1ses-419!2sar!4v1671218677555!5m2!1ses-419!2sar"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection