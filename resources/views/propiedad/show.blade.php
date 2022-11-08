{{-- @extends('tecnico.plantilla')

@section('title', "Sistema de Reportes de Incidentes")

@section('content')
<h2>Mostrar datos</h2>

@section('body')

@if(isset($message))
    <div class="alert">
        <p>{{ $mensaje }}</p>
    </div>
@endif

{{-- @if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

<form action="{{route ('tecnico.store')}}" method="POST">
@csrf
    <div>
        <lavel>Nombre</lavel>
        <input type="text" name="nombre"
             @if(isset($tecnico)) value="{{$tecnico->nombre}}" @endif
             @if(!$errors->has('nombre') && !is_null(old("nombre")))
             value="{{old("nombre")}}"
             @endif
        @if(!empty($errors->get('nombre')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif

        {{-- @class([
            'form-control',
            'is-invalid' => $errors->has('apellido')
        ]) 
        >
        @if($errors->has('nombre'))
        <p>{{$errors->first('nombre')}}</p>
        @endif
    </div>
    <div>
        <lavel>Apellido</lavel>
        <input type="text" name="apellido" 
            @if(isset($tecnico)) value="{{$tecnico->apellido}}" @endif
            @if(!$errors->has('apellido') && !is_null(old("apellido")))
             value="{{old("apellido")}}"
             @endif
        @if(!empty($errors->get('apellido')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('apellido')))
        <p>{{$errors->first('apellido')}}</p>
        @endif
    </div>
    <div>
        <lavel>Legajo</lavel>
        <input type="text" name="legajo"
            @if(isset($tecnico)) value="{{$tecnico->legajo}}" @endif
            @if(!$errors->has('legajo') && !is_null(old("legajo")))
             value="{{old("legajo")}}"
             @endif
        @if(!empty($errors->get('legajo')))
            class="form-control is-invalid"
        @else 
            class="form-control"
        @endif
        >
        @if(!empty($errors->first('legajo')))
        <p>{{$errors->first('legajo')}}</p>
        @endif
    </div>
    <div>
        <lavel>¿Está ocupado?</lavel>
        <input type="text" name="ocupado">
    </div>
    <div>
        <button type="submit">Guardar datos</button>
    </div>
</form>
@endsection --}}