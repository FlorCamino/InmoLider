@extends('layouts.base_user')

@section('content')

    <body>
        <main>
            <div class="container nos-container">
                <div id="myCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-carrusel" role="img" src="{{ asset('img/carrusel_1.jpg') }}" alt="logo">

                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1 class="title-carrousel">InmoLider</h1>
                                    <p class="text-carrousel">Una empresa dedicada pura y exclusivamente al servicio del
                                        cliente. </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-carrusel" role="img" src="{{ asset('img/carrusel_2.jpg') }}" alt="logo">

                            <div class="container">
                                <div class="carousel-caption">
                                    <h1 class="title-carrousel">Sueña</h1>
                                    <p class="text-carrousel">Y nosotros te ayudamos a hacerlos realidad</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-carrusel" role="img" src="{{ asset('img/carrusel_3.jpg') }}" alt="logo">

                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1 class="title-carrousel">Relajate</h1>
                                    <p class="text-carrousel">Deja las preocupaciones en manos de expertos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Antes</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Después</span>
                    </button>
                </div>
                <hr>
                <div class="container nos-featurette">
                    <div class="row featurette-all">
                        <div class="col-md-7 featurette">
                            <h2 class="featurette-heading">InmoLider&copy;. <span class="text-muted">Cumpliendo
                                    sueños!</span></h2>
                            <p class="lead">Somos una empresa transparente y sólida en la localidad de Río Grande,
                                Tierra del Fuego, que cuenta con más de 40 años de experiencia en la actividad inmobiliaria.
                                Su director y fundador, J. R. Lombardi junto a su equipo, trabajan arduamente para
                                satisfacer
                                las necesidades de sus clientes.
                                Ofrece asesoramiento durante el proceso de tasación, compra, venta, construcción y
                                administración
                                de inmuebles, impulsándolos a generar siempre mayor rentabilidad en sus inversiones.
                                Actualmente, nos estamos impulsando a mejorar nuestros servicios inviertiendo en nuevas
                                tecnologías
                                para que puedas acceder a nuestros servicios desde tu hogar.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-nos" role="img" src="{{ asset('img/img-rio-grande.jpg') }}" alt="logo">
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading fw-normal lh-1">Río Grande<span class="text-muted"></span></h2>
                            <p class="lead">Río Grande es una de las tres localidades en la
                                Provincia de Tierra del Fuego Antartida e Islas del Atlantico Sur,
                                que presenta una población de al menos 99 mil habitantes. Su nombre
                                es debenido de el reconocido afluente austral Rio Grande hacia la costa
                                del Mar Argentino.
                                Su principal economía esta basada en la Industria tanto nacional como
                                internacional.
                                La misma es reconocida por la capital de la trucha, pero también como la
                                capital de la vigilia por nuestras enorgullecedoras Islas Malvinas. </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-nos" role="img" src="{{ asset('img/img-islas-rg.jpg') }}" alt="logo">
                        </div>
                    </div>
                    <hr class="featurette-divider">
                </div>
            </div>
        </main>
    </body>
@endsection
