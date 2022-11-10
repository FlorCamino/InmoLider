@extends('layouts.plantilla')

@section('title', "InmoLider")

@section('content')
<h2>Mostrar propiedades disponibles</h2>

@section('body')

@if(isset($message))
    <div class="alert">
        <p>{{ $mensaje }}</p>
    </div>
@endif

 @if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

<form action="{{route ('administrador.store')}}" method="POST">
@csrf
    <div>
        <label>Id</label>
        <input type="text" name="id"
             @if(isset($propiedad)) value="{{$propiedad->id}}" @endif
             @if(!$errors->has('id') && !is_null(old("id")))
             value="{{old("id")}}"
             @endif
        @if(!empty($errors->get('id')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if($errors->has('id'))
        <p>{{$errors->first('id')}}</p>
        @endif
    </div>
    <div>
        <label>Descripcion</label>
        <input type="text" name="descripcion" 
            @if(isset($propiedad)) value="{{$propiedad->apellido}}" @endif
            @if(!$errors->has('descripcion') && !is_null(old("descripcion")))
             value="{{old("descripcion")}}"
             @endif
        @if(!empty($errors->get('descripcion')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('descripcion')))
        <p>{{$errors->first('descripcion')}}</p>
        @endif
    </div>
    <div>
        <label>Dirección</label>
        <input type="text" name="direccion"
            @if(isset($propiedad)) value="{{$propiedad->direccion}}" @endif
            @if(!$errors->has('direccion') && !is_null(old("direccion")))
             value="{{old("direccion")}}"
             @endif
        @if(!empty($errors->get('direccion')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('direccion')))
        <p>{{$errors->first('direccion')}}</p>
        @endif
    </div>
    <div>
        <label>Barrio</label>
        <input type="text" name="Barrio"
            @if(isset($propiedad)) value="{{$propiedad->barrio}}" @endif
            @if(!$errors->has('barrio') && !is_null(old("barrio")))
             value="{{old("barrio")}}"
             @endif
        @if(!empty($errors->get('barrio')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('barrio')))
        <p>{{$errors->first('barrio')}}</p>
        @endif
    </div>
    <div>
        <label>Código postal</label>
        <input type="text" name="CP"
            @if(isset($propiedad)) value="{{$propiedad->CP}}" @endif
            @if(!$errors->has('CP') && !is_null(old("CP")))
             value="{{old("CP")}}"
             @endif
        @if(!empty($errors->get('CP')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('CP')))
        <p>{{$errors->first('CP')}}</p>
        @endif
    </div>
    <div>
        <label>Propietario</label>
        <input type="text" name="nombrePropietario"
            @if(isset($propiedad)) value="{{$propiedad->idPropietario}}" @endif
            @if(!$errors->has('nombrePropietario') && !is_null(old("nombrePropietario")))
             value="{{old("nombrePropietario")}}"
             @endif
        @if(!empty($errors->get('nombrePropietario')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('nombrePropietario')))
        <p>{{$errors->first('nombrePropietario')}}</p>
        @endif
    </div>
    <div>
        <label>Cantidad de habitaciones</label>
        <input type="text" name="cantHab"
            @if(isset($propiedad)) value="{{$propiedad->cantHab}}" @endif
            @if(!$errors->has('cantHab') && !is_null(old("cantHab")))
             value="{{old("cantHab")}}"
             @endif
        @if(!empty($errors->get('cantHab')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('cantHab')))
        <p>{{$errors->first('cantHab')}}</p>
        @endif
    </div>
    <div>
        <label>Cantidad de baños</label>
        <input type="text" name="cantBanios"
            @if(isset($propiedad)) value="{{$propiedad->cantBanios}}" @endif
            @if(!$errors->has('cantBanios') && !is_null(old("cantBanios")))
             value="{{old("cantBanios")}}"
             @endif
        @if(!empty($errors->get('cantBanios')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('cantBanios')))
        <p>{{$errors->first('cantBanios')}}</p>
        @endif
    </div>
    <div>
        <label>Estacionamiento</label>
        <input type="text" name="estacionamiento"
            @if(isset($propiedad)) value="{{$propiedad->estacionamiento}}" @endif
            @if(!$errors->has('estacionamiento') && !is_null(old("estacionamiento")))
             value="{{old("estacionamiento")}}"
             @endif
        @if(!empty($errors->get('estacionamiento')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('estacionamiento')))
        <p>{{$errors->first('estacionamiento')}}</p>
        @endif
    </div>
    <div>
        <label>Amoblado</label>
        <input type="text" name="amoblado"
            @if(isset($propiedad)) value="{{$propiedad->amoblado}}" @endif
            @if(!$errors->has('amoblado') && !is_null(old("amoblado")))
             value="{{old("amoblado")}}"
             @endif
        @if(!empty($errors->get('amoblado')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('amoblado')))
        <p>{{$errors->first('amoblado')}}</p>
        @endif
    </div>
    <div>
        <label>Tipo de transacción</label>
        <input type="text" name="nombreTipoTransaccion"
            @if(isset($propiedad)) value="{{$propiedad->idTipoTransaccion}}" @endif
            @if(!$errors->has('nombreTipoTransaccion') && !is_null(old("nombreTipoTransaccion")))
             value="{{old("nombreTipoTransaccion")}}"
             @endif
        @if(!empty($errors->get('nombreTipoTransaccion')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('nombreTipoTransaccion')))
        <p>{{$errors->first('nombreTipoTransaccion')}}</p>
        @endif
    </div>
    <div>
        <label>Periodo</label>
        <input type="text" name="nombrePeriodo"
            @if(isset($propiedad)) value="{{$propiedad->idPeriodo}}" @endif
            @if(!$errors->has('nombrePeriodo') && !is_null(old("nombrePeriodo")))
             value="{{old("nombrePeriodo")}}"
             @endif
        @if(!empty($errors->get('nombrePeriodo')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('nombrePeriodo')))
        <p>{{$errors->first('nombrePeriodo')}}</p>
        @endif
    </div>
    <div>
        <label>Costo</label>
        <input type="text" name="costo"
            @if(isset($propiedad)) value="{{$propiedad->costo}}" @endif
            @if(!$errors->has('costo') && !is_null(old("costo")))
             value="{{old("costo")}}"
             @endif
        @if(!empty($errors->get('costo')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('costo')))
        <p>{{$errors->first('costo')}}</p>
        @endif
    </div>
    <div>
        <label>Estado de la propiedad</label>
        <input type="text" name="nombreEstadoPropiedad"
            @if(isset($propiedad)) value="{{$propiedad->nombreEstadoPropiedad}}" @endif
            @if(!$errors->has('nombrestadoPropiedad') && !is_null(old("nombreEstadoPropiedad")))
             value="{{old("nombreEstadoPropiedad")}}"
             @endif
        @if(!empty($errors->get('nombreEstadoPropiedad')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('nombreEstadoPropiedad')))
        <p>{{$errors->first('nombreEstadoPropiedad')}}</p>
        @endif
    </div>
</form>
@endsection 