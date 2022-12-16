@extends('layouts.base_user')

@section

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    @foreach($propiedades as $propiedad)
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($propiedad->PropiedadImagenes()->get() as $img)
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('storage/propiedad_imagenes/'.$img->urlImg)}}" alt="First slide">
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    @endforeach
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 py-5">
                <h3>Detalles de propiedades</h3>
                <p class="mb-4">{{$propiedad->titulo}}
                </p>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-orange" id="costo"
                                    placeholder="costo">
                                <label for="costo">Costo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-orange" id="idCiudad"
                                    placeholder="idCiudad">
                                <label for="idCiudad">Ciudad</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-orange" id="direccion"
                                    placeholder="direccion">
                                <label for="direccion">Dirección</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-orange" id="barrio"
                                    placeholder="barrio">
                                <label for="barrio">Barrio</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control-orange" id="CP" placeholder="CP">
                                <label for="CP">Código Postal</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="number" class="form-control form-control-orange" id="cantHab"
                                    placeholder="cantHab">
                                <label for="cantHab">Habitaciones</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="number" class="form-control form-control-orange" id="cantBanios"
                                    placeholder="cantBanios">
                                <label for="cantBanios">Baños</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="number" class="form-control form-control-orange" id="estacionamiento"
                                    placeholder="estacionamiento">
                                <label for="estacionamiento">Estacionamiento</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="number" class="form-control form-control-orange" id="aceptaMascotas"
                                    placeholder="aceptaMascotas">
                                <label for="aceptaMascotas">Mascotas</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-floating">
                                <input type="number" class="form-control form-control-orange" id="amoblado"
                                    placeholder="amoblado">
                                <label for="amoblado">Amoblado</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



            @endsection