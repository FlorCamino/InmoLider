@extends('layouts.base_admin')

<style>
    #btn1 {
        background-color: #1565c0;
        color: white;
    }
</style>

@section('name', 'InmoLíder')

@section('content')

<div class="container">
    <h2 class="title">Propiedades</h2>

    <form style="position: relative">
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="number" class="form-control" disabled value="{{ $propiedad->id }}" />
                    <label class="form-label" for="form6Example1">Identificación</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled value="{{ $propiedad->titulo }}" />
                    <label class="form-label" for="form6Example1">Título</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="datetime" class="form-control" disabled value="{{ $propiedad->fechaCreacion }}" />
                    <label class="form-label" for="form6Example2">Fecha de alta</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled value="{{ $propiedad->direccion }}" />
                    <label class="form-label" for="form6Example1">Dirección</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled value="{{ $propiedad->barrio }}" />
                    <label class="form-label" for="form6Example2">Barrio</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" id="form6Example1" class="form-control" disabled
                        value="{{ $propiedad->Ciudad->nombre }}" />
                    <label class="form-label" for="form6Example1">Ciudad</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline " style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled value="{{ $propiedad->CP }}" />
                    <label class="form-label" for="form6Example1">Código Postal</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled value="{{ $propiedad->Propietario->nombre }}" />
                    <label class="form-label" for="form6Example1">Propietario</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="number" class="form-control" disabled value="{{ $propiedad->cantHab }}" />
                    <label class="form-label" for="form6Example1">Habitaciones</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="number" class="form-control" disabled value="{{ $propiedad->cantBanios }}" />
                    <label class="form-label" for="form6Example2">Baños</label>
                </div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <label class="form-label" for="form6Example1">¿Acepta Mascotas?</label>
                    @if ($propiedad->aceptaMascotas == true)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="aceptaMascotas" id="flexRadioDefault1"
                            style="pointer-events:none" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="aceptaMascotas" id="flexRadioDefault1"
                            style="pointer-events:none" />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @else
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="aceptaMascotas" id="flexRadioDefault1"
                            style="pointer-events:none" />
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
            <div class="col-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <label class="form-label" for="form6Example2">Amoblado:</label>
                    @if ($propiedad->amoblado == true)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="amoblado" id="flexRadioDefault2"
                            style="pointer-events:none" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="amoblado" id="flexRadioDefault2"
                            style="pointer-events:none" />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @else
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="amoblado" id="flexRadioDefault2"
                            style="pointer-events:none" />
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
            <div class="col-4 mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <label class="form-label" for="form6Example1">Estacionamiento:</label>
                    @if ($propiedad->estacionamiento == true)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estacionamiento" id="flexRadioDefault3"
                            style="pointer-events:none" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estacionamiento" id="flexRadioDefault3"
                            style="pointer-events:none" />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @else
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estacionamiento" id="flexRadioDefault3"
                            style="pointer-events:none" />
                        <label class="form-check-label" for="flexRadioDefault1"> Si</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estacionamiento" id="flexRadioDefault3"
                            style="pointer-events:none" checked />
                        <label class="form-check-label" for="flexRadioDefault1"> No </label>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled
                        value="{{ $propiedad->TipoTransaccion->nombre }}" />
                    <label class="form-label" for="form6Example1">Tipo transacción</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline mb-4" style="margin-bottom: 0px">
                    <input type="text" id="form6Example1" class="form-control" disabled
                        value="{{ $propiedad->costo }}" />
                    <label class="form-label" for="form6Example1">Valor</label>
                </div>
            </div>
            <div class="col mb-4">
                <div class="form-outline mb-4" style="margin-bottom: 0px">
                    <input type="text" class="form-control" disabled
                        value="{{ $propiedad->EstadoPropiedad->nombre }}" />
                    <label class="form-label" for="form6Example1">Estado de la propiedad</label>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mb-4">
                <div class="form-outline" style="margin-bottom: 0px">
                    <textarea class="form-control" id="descripcion" name="descripcion" disabled
                        rows="4">{{ $propiedad->descripcion }}</textarea>
                    <label class="form-label" for="form6Example1">Descripción</label>
                </div>
            </div>
        </div>
        <!-- IMAGENES -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($propiedad->PropiedadImagenes()->get() as $img)
                <div class="carousel-item active">
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
            <div class="text-right">
                <a href="{{ route('propiedad.create') }}">
                    <button type="submit" class="button-7 ml-3"> <a class="text-light"
                            href="{{ route('propiedad.index') }}">Volver</a></button>
                </a>
            </div>
        </div>
    </form>
</div>

@endsection