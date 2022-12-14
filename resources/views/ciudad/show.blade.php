@extends('layouts.base_admin')

<style>
  #btn4 {
    background-color: #1565c0;
    color: white;
  }
</style>

@section('name', 'InmoLíder')

@section('content')

<div class="container">
  <h2 class="title">Propietario</h2>

  <form style="position: relative">
    <div class="form-outline mb-4" style="margin-bottom: 0px">
      <input type="number" class="form-control" disabled value="{{$ciudad->id}}" />
      <label class="form-label" for="form6Example1">Identificación</label>
    </div>

    <div class="row mb-4">
      <div class="col">
        <div class="form-outline" style="margin-bottom: 0px">
          <input type="text" class="form-control" disabled value="{{$ciudad->nombre}}" />
          <label class="form-label" for="form6Example1">Nombre</label>
        </div>
      </div>
    </div>
    <!-- Submit button -->
    <!-- Submit button -->
    <div class="container-fluid">
      <div class="text-right">
        <div class="row">
          <div class="col-12">
            <a href="{{route('ciudad.create')}}">
              <button type="submit" class="button-7 ml-3"> <a class="text-light"
                  href="{{route('ciudad.index')}}">Volver</a></button>
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection