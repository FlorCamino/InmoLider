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


                <!-- START THE FEATURETTES -->

                <hr>

                <div class="row featurette-all">
                    <div class="col-md-7 featurette">
                        <h2 class="featurette-heading">InmoLider&copy;. <span class="text-muted">Cumpliendo
                                sueños!</span></h2>
                        <p class="lead">Somos una empresa transparente y sólida en la localidad de Río Grande,
                            Tierra del Fuego, que cuenta con más de 40 años de experiencia en la actividad inmobiliaria.
                            Su director y fundador, J. R. Lombardi junto a su equipo, trabajan arduamente para satisfacer
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
                        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See
                                for yourself.</span></h2>
                        <p class="lead">Another featurette? Of course. More placeholder content here to give you an
                            idea
                            of how this layout would work with some actual real-world content in place.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                                fill="#aaa" dy=".3em">500x500</text>
                        </svg>

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
                                class="text-muted">Checkmate.</span></h2>
                        <p class="lead">And yes, this is the last block of representative placeholder content. Again,
                            not
                            really intended to be actually read, simply here to give you a better view of what this
                            would
                            look like with some actual content. Your content.</p>
                    </div>
                    <div class="col-md-5">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%"
                                fill="#aaa" dy=".3em">500x500</text>
                        </svg>

                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->
        @endsection
