@extends('layouts.base_user')

@section('content')

<div class="container barra-busqueda">
    <form action="#" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-orange" id="floatingPIdPropiedad"
                        placeholder="idPropiedad">
                    <label for="floatingPIdPropiedad">Id Propiedad</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-orange" id="tipoTransaccion"
                        placeholder="Condición">
                    <label for="tipoTransaccion"> Condición </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-orange" id="idCiudad" placeholder="Ciudad">
                    <label for="idCiudad"> Localidad </label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-orange" id="menorValor"
                        placeholder="Menor valor">
                    <label for="menorValor"> Menor valor </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control form-control-orange" id="mayorValor"
                        placeholder="Mayor valor">
                    <label for="mayorValor"> Mayor valor </label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating">
                    <button class="btn-form-control" type="submit">Ingresar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Cards -->

<div class="container card-cont">
    <div class="row line-card">
        @foreach($propiedades as $propiedad)
        <div class="col-6 card-container">
            <div class="card">
                @if($propiedad->PropiedadImagenes()->get())
                <?php  $img = $propiedad->PropiedadImagenes()->get()->first()
                    ?>
                <img class="img-card" src="{{asset('storage/propiedad_imagenes/'.$img->urlImg)}}" alt="First slide">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{$propiedad->titulo}}</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a class="ver_mas" href="/inicio_ver/{{$propiedad->id}}">Ver mas</a>
                        </div>
                        <small class="text-muted">${{$propiedad->costo}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection