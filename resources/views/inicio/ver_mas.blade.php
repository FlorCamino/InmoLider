@extends('layouts.base_user')

@section('content')

<div class="container">
    <h2 class="title">Propiedades</h2>

    <form class="form-datos">
        <div class="row">
            <div class="col form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control form-reg-orange bg-dark" disabled
                        value="{{ $propiedad->titulo }}" />
                    <label class="form-label" for="form6Example1"> <strong> Título</strong> </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control form-reg-orange bg-dark" disabled
                        value="{{ $propiedad->direccion }}" />
                    <label class="form-label" for="form6Example1"><strong> Dirección</strong></label>
                </div>
            </div>
            <div class="col form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control form-reg-orange bg-dark" disabled
                        value="{{ $propiedad->barrio }}" />
                    <label class="form-label" for="form6Example2"><strong> Barrio </strong></label>
                </div>
            </div>

            <div class="col form-floating-reg">
                <div class="form-outline " style="margin-bottom: 0px">
                    <input type="text" class="form-control form-reg-orange bg-dark" disabled
                        value="{{ $propiedad->CP }}" />
                    <label class="form-label" for="form6Example1"><strong> Código Postal </strong></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="number" class="form-control form-reg-orange bg-dark" disabled
                        value="{{ $propiedad->cantHab }}" />
                    <label class="form-label" for="form6Example1"><strong> Habitaciones</strong></label>
                </div>
            </div>
            <div class="col form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="number" class="form-control form-reg-orange bg-dark" disabled
                        value="{{ $propiedad->cantBanios }}" />
                    <label class="form-label" for="form6Example2"><strong> Baños </strong></label>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-4 form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <label class="form-label" for="form6Example1"> <strong> ¿Acepta Mascotas? </strong></label>
                    @if ($propiedad->aceptaMascotas == true)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input bg-dark" type="radio" name="aceptaMascotas"
                            id="flexRadioDefault1" style="pointer-events:none; border-color: #ea5928" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="aceptaMascotas" id="flexRadioDefault1"
                            style="pointer-events:none" />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @else
                    <div class="form-check form-check-inline">
                        <input class="form-check-input bg-dark" type="radio" name="aceptaMascotas"
                            id="flexRadioDefault1" style="pointer-events:none; border-color: #ea5928" />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="aceptaMascotas" id="flexRadioDefault1"
                            style="pointer-events:none" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-4 form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <label class="form-label" for="form6Example2"><strong> Amoblado: </strong></label>
                    @if ($propiedad->amoblado == true)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input bg-dark" type="radio" name="amoblado" id="flexRadioDefault2"
                            style="pointer-events:none; border-color: #ea5928" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="amoblado" id="flexRadioDefault2"
                            style="pointer-events:none" />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @else
                    <div class="form-check form-check-inline">
                        <input class="form-check-input bg-dark" type="radio" name="amoblado" id="flexRadioDefault2"
                            style="pointer-events:none; border-color: #ea5928" />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="amoblado" id="flexRadioDefault2"
                            style="pointer-events:none" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-4 form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <label class="form-label" for="form6Example1"><strong> Estacionamiento: </strong></label>
                    @if ($propiedad->estacionamiento == true)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input bg-dark" type="radio" name="estacionamiento"
                            id="flexRadioDefault3" style="pointer-events:none; border-color: #ea5928" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estacionamiento" id="flexRadioDefault3"
                            style="pointer-events:none" />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @else
                    <div class="form-check form-check-inline">
                        <input class="form-check-input bg-dark" type="radio" name="estacionamiento"
                            id="flexRadioDefault3" style="pointer-events:none; border-color: #ea5928" />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input bg-dark" type="radio" name="estacionamiento"
                            id="flexRadioDefault3" style="pointer-events:none" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col form-floating-reg">
                <div class="form-outline mb-4" style="margin-bottom: 0px">
                    <input type="text" id="form6Example1" class="form-control form-reg-orange" disabled
                        value="{{ $propiedad->costo }}" />
                    <label class="form-label" for="form6Example1"> <strong> Valor </strong></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col form-floating-reg">
                <div class="form-outline" style="margin-bottom: 0px">
                    <textarea class="form-control form-reg-orange" id="descripcion" name="descripcion" disabled
                        rows="4">{{ $propiedad->descripcion }}</textarea>
                    <label class="form-label" for="form6Example1"><strong> Descripción </strong></label>
                </div>
            </div>
        </div>
        <!-- IMAGENES -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($propiedad->PropiedadImagenes()->get() as $img)
                <div class="carousel-item-ver active">
                    <img src="{{asset('storage/propiedad_imagenes/'.$img->urlImg)}}" class="d-block w-100" alt="...">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Submit button -->
        <div class="container-fluid">
            <div class="text-end">
                <a href="{{ route('propiedad.create') }}">
                    <button type="submit" class="btn-volver ml-3"> <a class="text-dark" style="text-decoration:none"
                            href="{{ route('propiedad.index') }}">Volver</a></button>
                </a>
            </div>
        </div>
    </form>
</div>




@endsection