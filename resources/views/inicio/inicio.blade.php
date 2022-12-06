@extends('layouts.base_user')

@section('content')
    <main>
        <div class="container barra-busqueda">
            <form action="#" method="POST">
                @csrf
                @method('POST')
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
                            <input type="text" class="form-control form-control-orange" id="idCiudad"
                                placeholder="Ciudad">
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
        <div class="container group-cards">
            <div class="row cards">
                <div class="col">
                    <div class="card">
                        <svg class="imgCard" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: Imagen" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Propiedad</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Imagen propiedad</text>
                        </svg>
                        <div class="card-body">
                            <h3>Título</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm">Ver
                                        mas...</button>
                                </div>
                                <small class="text-muted">valor</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <svg class="imgCard" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: Imagen" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Propiedad</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Imagen propiedad</text>
                        </svg>
                        <div class="card-body">
                            <h3>Título</h3>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm">Ver
                                        mas...</button>
                                </div>
                                <small class="text-muted">valor</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <svg class="imgCard" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: Imagen" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Propiedad</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Imagen propiedad</text>
                        </svg>
                        <div class="card-body">
                            <h3>Título</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm">Ver
                                        mas...</button>
                                </div>
                                <small class="text-muted">valor</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row cards">
                <div class="col">
                    <div class="card">
                        <svg class="imgCard" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Imagen" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Propiedad</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Imagen propiedad</text>
                        </svg>
                        <div class="card-body">
                            <h3>Título</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm">Ver
                                        mas...</button>
                                </div>
                                <small class="text-muted">valor</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <svg class="imgCard" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Imagen" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Propiedad</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Imagen propiedad</text>
                        </svg>
                        <div class="card-body">
                            <h3>Título</h3>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm">Ver
                                        mas...</button>
                                </div>
                                <small class="text-muted">valor</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <svg class="imgCard" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Imagen" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Propiedad</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Imagen propiedad</text>
                        </svg>
                        <div class="card-body">
                            <h3>Título</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm">Ver
                                        mas...</button>
                                </div>
                                <small class="text-muted">valor</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
