<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Encontrá las mejores propiedades en venta y alquiler y alquiler de Mendoza. Casas, departamentos, terrenos y más. Ingresá ahora.">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <script async src="//253592.tctm.co/t.js"></script>
    <title>Inmobiliaria De Lucia | Propiedades a la venta y alquiler en Mendoza</title>
    <link type="text/css" rel="stylesheet" href="https://www.inmobiliariadelucia.com.ar/assets/css/bootstrap.min.css"
        media="screen" />
    <link type="text/css" rel="stylesheet" href="https://www.inmobiliariadelucia.com.ar/assets/css/pgwslideshow.min.css"
        media="screen" />
    <link type="text/css" rel="stylesheet" href="https://www.inmobiliariadelucia.com.ar/assets/css/de-lucia.css?v6"
        media="screen" />
    <link type="text/css" rel="stylesheet" href="https://www.inmobiliariadelucia.com.ar/assets/css/style-dl.css?v6"
        media="screen" />
    <link type="text/css" rel="stylesheet"
        href="https://www.inmobiliariadelucia.com.ar/assets/css/jquery-ui.structure.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="https://www.inmobiliariadelucia.com.ar/assets/css/jquery-ui.theme.css"
        media="screen" />
    <link type="text/css" rel="stylesheet" href="https://www.inmobiliariadelucia.com.ar/assets/css/de-lucia-print.css"
        media="print" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body role="document">
    <!--<div class="loading"></div>-->
    <header>
        <nav id="navbar-header" class="w-100 float-left navbar-expand-lg navback">
            <div class="boxnav">
                <div class="box-logo">
                    <a class="navbar-brand" href="https://www.inmobiliariadelucia.com.ar/">
                        <img src="https://www.inmobiliariadelucia.com.ar/assets/img/DeLucia_logo_header.png"
                            alt="De Lucia Logo Header">
                    </a>
                </div>
                <div class="box-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#main-nav-container" aria-controls="main-nav-container" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"> <span class="icon-bar"></span> <span class="icon-bar"></span>
                            <span class="icon-bar">
                            </span> </span> </button>
                    <div class="menu-content collapse navbar-collapse menu" id="main-nav-container">
                        <ul>
                            <li class="li-menu">
                                <a class="nav-link selected" href="https://www.inmobiliariadelucia.com.ar/"
                                    title="Inicio">Inicio</a>
                            </li>
                            <li class="li-menu">
                                <a class="nav-link" href="https://www.inmobiliariadelucia.com.ar/servicios"
                                    title="Servicios">Servicios</a>
                            </li>
                            <li class="li-menu">
                                <a class="nav-link" href="https://www.inmobiliariadelucia.com.ar/propiedades"
                                    title="Propiedades">Propiedades</a>
                            </li>
                            <li class="li-menu">
                                <a class="nav-link" href="https://www.inmobiliariadelucia.com.ar/solicitud-de-alquiler"
                                    title="Requisitos para Alquilar">Requisitos para Alquilar</a>
                            </li>
                            <div class="dl_search-box dropdown-dl">
                                <div class="dl_input_search">
                                    <input type="search" id="inputSearchHeader" placeholder="Búsqueda personalizada"
                                        value="">
                                    <button type="button" id="inputSearchHeaderButton" class="dl_search-button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main id="main-index">
        <div class="dl_portada">
            <div class="dl_buscador-header">
                <div class="dl_btn-buscador-header">
                    <button id="btnBuscadorVenta" class="btn-selected">Venta</button>
                    <button id="btnBuscadorAlquiler" class="">Alquiler</button>
                </div>
                <div class="dl_box-buscador-header">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#header-search-form" aria-controls="header-search-form" aria-expanded="false"
                        aria-label="Toggle navigation" style="display:none;">
                        <i class="fa fa-search">
                        </i>
                        <i class="fa fa-close">
                        </i> Buscar Propiedad </button>
                    <div id="SearchForm" class="w-100 form-buscador">
                        <div class="columna-buscador-1">
                            <div class="controls">
                                <div class="box-formb">
                                    <label for="BuscadorId">Id Propiedad</label>
                                    <input id="BuscadorId" name="prp_id" value="" type="text"
                                        placeholder="ID" class="js-filter">
                                </div>
                                <div class="box-formb-2">
                                    <label for="BuscadorLocalidad">Localidad</label>
                                    <input id="BuscadorLocalidad" name="loc" value="" type="text"
                                        placeholder="Ingresar ciudad" class="js-filter">
                                </div>
                                <div class="box-formb-2 dl_select-home">
                                    <label for="BuscadorPropiedad">Tipo de Propiedad</label>
                                    <select name="tip_id" id="search_tipo_propriedad"
                                        class="js-select-custom js-filter">
                                        <option value="0">Tipo de Propiedad</option>
                                        <option value="1">Casa</option>
                                        <option value="5">Departamento</option>
                                        <option value="11">Oficina</option>
                                        <option value="6">Lote</option>
                                        <option value="10">Local Comercial</option>
                                        <option value="16">Finca</option>
                                        <option value="24">Loteo</option>
                                        <option value="21">Duplex</option>
                                        <option value="8">Galpon</option>
                                        <option value="33">Triplex</option>
                                        <option value="2">Edificio</option>
                                        <option value="13">Cochera</option>
                                        <option value="7">Cabaña</option>
                                    </select>
                                </div>
                                <div class="box-formb-2">
                                    <label for="BuscadorPrecio">Rango de Precio</label>
                                    <div class="inputs-min-max">
                                        <input type="text" placeholder="Mínimo" name="pre_min" data-number="1"
                                            class="js-filter">
                                        <input type="text" placeholder="Máximo" name="pre_max" data-number="1"
                                            class="js-filter">
                                    </div>
                                </div>
                                <div class="box-formb-2">
                                    <div class="box-form-switch-moneda">
                                        <span class="label">Dólares</span>
                                        <div class="onoffswitch inline-block">
                                            <input type="checkbox" name="pesos"
                                                class="onoffswitch-checkbox js-filter" id="switchMoneda"
                                                tabindex="0">
                                            <label class="onoffswitch-label" for="switchMoneda"> <span
                                                    class="onoffswitch-inner">
                                                </span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                        <span class="label">Pesos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-buscavanz controls">
                                <div class="box-formb-2">
                                    <label>Cantidad de dormitorios</label>
                                    <div class="inputs-min-max">
                                        <input type="text" placeholder="Mínimo" name="dorm_min" data-number="1"
                                            class="js-filter">
                                        <input type="text" placeholder="Máximo" name="dorm_max" data-number="1"
                                            class="js-filter">
                                    </div>
                                </div>
                                <div class="box-formb-2">
                                    <label>Cantidad de baños</label>
                                    <div class="inputs-min-max">
                                        <input type="text" placeholder="Mínimo" name="ban_min" data-number="1"
                                            class="js-filter">
                                        <input type="text" placeholder="Máximo" name="ban_max" data-number="1"
                                            class="js-filter">
                                    </div>
                                </div>
                                <div class="box-formb-2">
                                    <label>Cochera</label>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="cochera" class="onoffswitch-checkbox js-filter"
                                            id="switchCochera" tabindex="0">
                                        <label class="onoffswitch-label" for="switchCochera">
                                            <span class="onoffswitch-inner onoffswitch-inner-sino"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columna-buscador-2">
                            <button id="SearchButton" type="submit" class="btn-red border-button">Buscar</button>
                            <input type="hidden" name="con_id" class="js-filter" id="input_buscador_condicion"
                                value="1">
                            <a href="#" class="filtro-avanzado" id="btnBuscadorFiltro">+ Filtro avanzado</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZF6yQslDb4I?controls=0&autoplay=1&start=2" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            <div id="yt_video_home"></div>
        </div>
        <div class="dl_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dl_publicidad">
                            <div class="cont-iframe">
                                <iframe src="/assets/Publicidad_IDL/index.html" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dl_section">
            <h1 class="dl_titulo-principal">Últimas Propiedades</h1>
            <div class="dl_propiedades-iniciales">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/3452"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/3452/hash_d00fbe70e35f05f4a991e74f42b486db.jpg?"
                                                alt="Pueyrredón - Adyacente Calle Viamonte - Lujan De Cuyo | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt"></i>Pueyrredón - Adyacente Calle Viamonte -
                                        Lujan De Cuyo | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) Consultar</p>
                                    <p class="dl_nombre-propiedad">Casa</p>
                                    <p class="dl_descripcion-propiedad">Pueyrredón - Adyacente Calle Viamonte - Lujan
                                        De Cuyo | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">---</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">2856</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-cochera">
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/1707"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/1707/hash_f1191590fcb4311257a5e9340208e91d.jpg?"
                                                alt="B° Las Candelas I - Almirante Brown - Lujan De Cuyo | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt">
                                        </i>B° Las Candelas I - Almirante Brown - Lujan De Cuyo | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 320.000</p>
                                    <p class="dl_nombre-propiedad">Casa</p>
                                    <p class="dl_descripcion-propiedad">B° Las Candelas I - Almirante Brown - Lujan De
                                        Cuyo | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">800</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/3303"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/3303/hash_56623003f8057d65ab699d959703a7f9.jpg?"
                                                alt="Darragueira - Darragueira Park - Lujan De Cuyo | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt"></i>Darragueira - Darragueira Park - Lujan De
                                        Cuyo | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 320.000</p>
                                    <p class="dl_nombre-propiedad">Casa</p>
                                    <p class="dl_descripcion-propiedad">Darragueira - Darragueira Park - Lujan De Cuyo
                                        | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">637</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/2638"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/2638/hash_e630a3a65ef59961ca955cb71ecc574a.jpg?"
                                                alt="Almirante Brown - Las Candelas I - Lujan De Cuyo | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt"></i>Almirante Brown - Las Candelas I - Lujan
                                        De Cuyo | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 250.000</p>
                                    <p class="dl_nombre-propiedad">Casa</p>
                                    <p class="dl_descripcion-propiedad">Almirante Brown - Las Candelas I - Lujan De
                                        Cuyo | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">800</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/3272"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/3272/hash_41d22f147ab39ad542e16ff0d62c3e84.jpg?"
                                                alt="San Martin 524 - Ciudad - Capital | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt">
                                        </i>San Martin 524 - Ciudad - Capital | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 299.000</p>
                                    <p class="dl_nombre-propiedad">Local Comercial</p>
                                    <p class="dl_descripcion-propiedad">San Martin 524 - Ciudad - Capital | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">---</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">3</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">359</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-sin_cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/2774"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/2774/hash_74296cfd947fe4920a9ae6d1da35d8be.jpg?"
                                                alt="Carrodilla- Manuel A. Saenz - Portal Sur II - Lujan De Cuyo | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt">
                                        </i>Carrodilla- Manuel A. Saenz - Portal Sur II - Lujan De Cuyo | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 63.000</p>
                                    <p class="dl_nombre-propiedad">Departamento</p>
                                    <p class="dl_descripcion-propiedad">Carrodilla- Manuel A. Saenz - Portal Sur II -
                                        Lujan De Cuyo | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">2</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">1</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">100</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/3364"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/3364/hash_f5373f5f70a1f8c46a270b56e62276c1.jpg?"
                                                alt="Elpidio González 2711 - Los Teros - Guaymallen | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt">
                                        </i>Elpidio González 2711 - Los Teros - Guaymallen | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 198.000</p>
                                    <p class="dl_nombre-propiedad">Lote</p>
                                    <p class="dl_descripcion-propiedad">Elpidio González 2711 - Los Teros - Guaymallen
                                        | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">---</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">---</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">858</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-sin_cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/3497"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/3497/hash_3e8f8a684e65af3f7398e7eec8b00e31.jpg?"
                                                alt="Pascual Toso - Adyacente Costanera - Guaymallen | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt"></i>Pascual Toso - Adyacente Costanera -
                                        Guaymallen | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 30.000</p>
                                    <p class="dl_nombre-propiedad">Departamento</p>
                                    <p class="dl_descripcion-propiedad">Pascual Toso - Adyacente Costanera - Guaymallen
                                        | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">2</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">---</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">72</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-sin_cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="box-propiedad">
                                <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/3270"
                                    class="dl_enlace-detalle"></a>
                                <div class="box-propiedad-1">
                                    <div class="box-img-propiedad">
                                        <span>Venta</span>
                                        <div class="img-featured">
                                            <img class="loading"
                                                src="https://www.inmobiliariadelucia.com.ar/image/home/3270/hash_e22c58fe6095a61d8aa9f66e07b2cdec.jpg?"
                                                alt="Avellaneda 2436 - General Belgrano - Guaymallen | Mendoza">
                                        </div>
                                    </div>
                                    <p class="dl_direccion-propiedad">
                                        <i class="fas fa-map-marker-alt">
                                        </i>Avellaneda 2436 - General Belgrano - Guaymallen | Mendoza
                                    </p>
                                    <p class="dl_precio-propiedad">$ Consultar / (U$S) 98.000</p>
                                    <p class="dl_nombre-propiedad">Galpon</p>
                                    <p class="dl_descripcion-propiedad">Avellaneda 2436 - General Belgrano - Guaymallen
                                        | Mendoza</p>
                                </div>
                                <div class="box-propiedad-2">
                                    <div class="dl_items-propiedad">
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">---</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">2</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-banio">Baños</span>
                                            </p>
                                        </div>
                                        <div class="dl_items-propiedad-1">
                                            <p class="dl_numero-propiedad">305</p>
                                            <p class="dl_nombre-item-propiedad">
                                                <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                            </p>
                                        </div>
                                        <p class="dl_items-propiedad-2">
                                            <span class="sprite-servicio-gris ic-sin_cochera"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #nuevas-propriedades-->
            </div>
        </div>
        <div class="dl_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="dl_titulo-principal">Propiedades Destacadas</h2>
                        <p class="dl_subtitulo_principal">Las propiedades más populares estarán en esta lista debajo
                        </p>
                        <div class="dl_propiedades-destacadas">
                            <div class="container">
                                <div id="propriedades-destacadas" class="owl-carousel dl-carrusel">
                                    <div class="box-propiedad">
                                        <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/2983"
                                            class="dl_enlace-detalle"></a>
                                        <div class="box-propiedad-1">
                                            <div class="box-img-propiedad">
                                                <span>Venta</span>
                                                <div class="img-featured">
                                                    <img class="loading"
                                                        src="https://www.inmobiliariadelucia.com.ar/image/home/2983/hash_7d296a8e8fb4337fc8ad109a30f99ddf.jpg?"
                                                        alt="Eusebio Blanco - La Paloma-Alto Dorrego - Guaymallen | Mendoza">
                                                </div>
                                            </div>
                                            <p class="dl_direccion-propiedad">
                                                <i class="fas fa-map-marker-alt"></i>Eusebio Blanco - La Paloma-Alto
                                                Dorrego - Guaymallen | Mendoza
                                            </p>
                                            <p class="dl_precio-propiedad">$ Consultar / (U$S) 139.900</p>
                                            <p class="dl_nombre-propiedad">Casa</p>
                                            <p class="dl_descripcion-propiedad">Eusebio Blanco - La Paloma-Alto Dorrego
                                                - Guaymallen | Mendoza</p>
                                        </div>
                                        <div class="box-propiedad-2">
                                            <div class="dl_items-propiedad">
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">3</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                                    </p>
                                                </div>
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">2</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-banio">Baños</span>
                                                    </p>
                                                </div>
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">334</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                                    </p>
                                                </div>
                                                <p class="dl_items-propiedad-2">
                                                    <span class="sprite-servicio-gris ic-cochera"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-propiedad">
                                        <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/1876"
                                            class="dl_enlace-detalle"></a>
                                        <div class="box-propiedad-1">
                                            <div class="box-img-propiedad">
                                                <span>Venta</span>
                                                <div class="img-featured">
                                                    <img class="loading"
                                                        src="https://www.inmobiliariadelucia.com.ar/image/home/1876/hash_c6e2d94ee790b5ee3c4cf65dcd77aa04.jpg?"
                                                        alt="BOEDO - Alba De Tanqay - Maipu | Mendoza">
                                                </div>
                                            </div>
                                            <p class="dl_direccion-propiedad">
                                                <i class="fas fa-map-marker-alt"></i>BOEDO - Alba De Tanqay - Maipu |
                                                Mendoza
                                            </p>
                                            <p class="dl_precio-propiedad">$ Consultar / (U$S) 24.999</p>
                                            <p class="dl_nombre-propiedad">Lote</p>
                                            <p class="dl_descripcion-propiedad">BOEDO - Alba De Tanqay - Maipu |
                                                Mendoza</p>
                                        </div>
                                        <div class="box-propiedad-2">
                                            <div class="dl_items-propiedad">
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">---</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                                    </p>
                                                </div>
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">---</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-banio">Baños</span>
                                                    </p>
                                                </div>
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">504</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                                    </p>
                                                </div>
                                                <p class="dl_items-propiedad-2">
                                                    <span class="sprite-servicio-gris ic-sin_cochera"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-propiedad">
                                        <a href="https://www.inmobiliariadelucia.com.ar/detalle-propiedad/2831"
                                            class="dl_enlace-detalle"></a>
                                        <div class="box-propiedad-1">
                                            <div class="box-img-propiedad">
                                                <span>Venta</span>
                                                <div class="img-featured">
                                                    <img class="loading"
                                                        src="https://www.inmobiliariadelucia.com.ar/image/home/2831/hash_f2dcfca8a913c6b3ae8470b324c6b912.jpg?"
                                                        alt="Bombal Sur- Echeverria Y Biritos - B° Bombal Sur - Godoy Cruz | Mendoza">
                                                </div>
                                            </div>
                                            <p class="dl_direccion-propiedad">
                                                <i class="fas fa-map-marker-alt"></i>Bombal Sur- Echeverria Y Biritos -
                                                B° Bombal Sur - Godoy Cruz | Mendoza
                                            </p>
                                            <p class="dl_precio-propiedad">$ Consultar / (U$S) 96.000</p>
                                            <p class="dl_nombre-propiedad">Departamento</p>
                                            <p class="dl_descripcion-propiedad">Bombal Sur- Echeverria Y Biritos - B°
                                                Bombal Sur - Godoy Cruz | Mendoza</p>
                                        </div>
                                        <div class="box-propiedad-2">
                                            <div class="dl_items-propiedad">
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">2</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-cama">Dormitorios</span>
                                                    </p>
                                                </div>
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">2</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-banio">Baños</span>
                                                    </p>
                                                </div>
                                                <div class="dl_items-propiedad-1">
                                                    <p class="dl_numero-propiedad">103</p>
                                                    <p class="dl_nombre-item-propiedad">
                                                        <span class="sprite-servicio-gris ic-metros">Mts 2</span>
                                                    </p>
                                                </div>
                                                <p class="dl_items-propiedad-2">
                                                    <span class="sprite-servicio-gris ic-cochera"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dl_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dl_publicidad">
                            <div class="cont-iframe">
                                <iframe src="/assets/Publicidad_IDL/index.html" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dl_box-cotizacion">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 dl_info-cotizacion">
                        <i class="fas fa-calculator"></i>
                        <h3>Conozca el valor de su propiedad</h3>
                        <a href="https://www.inmobiliariadelucia.com.ar/servicios#solicitar-tasacion"
                            class="btn-red">Solicitar un tazador</a>
                    </div>
                    <div class="col-md-8">
                        <div class="dl_img_cotizacion">
                            <img src="https://www.inmobiliariadelucia.com.ar/assets/img/bloque-cotizacion.jpg"
                                alt="Cotización">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Suscribirme a novedades</h2>
                    </div>
                </div>
            </div>
            <div id="footer-subscribe">
                <div id="suscribeSuccess" style="display:none">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><br />LA SUSCRIPCIÓN FUE ENVIADA CORRECTAMENTE</h4>
                                <p>En breves recibirás las mejores novedades del sector inmobiliario</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="https://www.inmobiliariadelucia.com.ar/noticias/suscripcion"
                    class="w-100 form-newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-base w-100">
                                    <input name="nombre" required placeholder="Ingrese su nombre y apellido"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-base w-100">
                                    <input name="email" required placeholder="Ingrese su dirección de email"
                                        type="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button id="Enviar" class="g-recaptcha"
                                    data-sitekey="6Le-hOweAAAAABHmf3lgxsoOyzpv-UehJU9J_SRP"
                                    data-callback="onSubmitRecaptchaSubscribe"
                                    data-action="submit">Suscribirme</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4" id="footer-logo">
                        <a href="https://www.inmobiliariadelucia.com.ar/" class="logo-footer">
                            <img src="https://www.inmobiliariadelucia.com.ar/assets/img/DeLucia_logo_footer.png"
                                class="img-fluid" alt="De Lucia Logo Footer"> </a>
                        <div class="redes-footer"> <a href="https://www.facebook.com/DeLuciaInmobiliaria/"
                                target="_blank"><i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/inmobiliariadelucia0/?hl=en" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 dl_info-footer">
                        <a href="https://www.inmobiliariadelucia.com.ar/quienes-somos" title="Inicio">Quienes
                            Somos</a>
                        <a href="https://www.inmobiliariadelucia.com.ar/servicios" title="Servicios">Servicios</a>
                        <a href="https://www.inmobiliariadelucia.com.ar/propiedades"
                            title="Propiedades">Propiedades</a>
                        <a href="https://www.inmobiliariadelucia.com.ar/solicitud-de-alquiler"
                            title="Requisitos para alquilar">Requisitos para alquilar</a>
                    </div>
                    <div class="col-md-4 dl_info-footer">
                        <h4>Contactanos</h4>
                        <p>Dorrego 1927. 1º Piso. Of. 1. Alto Dorrego</p>
                        <p>Guaymallén. Mendoza, Argentina</p>
                        <p><a href="mailto:info@inmobiliariadelucia.com.ar">info@inmobiliariadelucia.com.ar</a></p>
                        <p><a href="tel:+542614319623">(0261) 431 9623</a> | <a href="tel:+542614323507">(0261) 432
                                3507</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-development" class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copy-text">
                        <p>Copyright © 2022 De Lucia Inmobiliaria</p>
                    </div>
                    <div class="col-md-6 mydesign">
                        <p>Sitio desarrollado por
                            <a href="https://www.mydesign.com.ar/" target="_blank">
                                <img src="https://www.inmobiliariadelucia.com.ar/assets/img/DeLucia_ico_logo_MD.png"
                                    alt="My Design Logomarca">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://wa.me/+5492612162821?" class="float-ws" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </footer>
    <script type="text/javascript">
        var base_url = 'https://www.inmobiliariadelucia.com.ar/';
    </script>
    <script type="text/javascript">
        var uri_string = '';
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/jquery-3.2.1.min.js"
        charset="UTF-8"></script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/tether.min.js" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/validator.min.js" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/pgwslideshow.min.js"
        charset="UTF-8"></script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/bootstrap.min.js" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/ie10-viewport-bug-workaround.js"
        charset="UTF-8"></script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/jquery.lazyload.js"
        charset="UTF-8"></script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/de-lucia.js?v6" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/drop-menu.js?v1" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/main.js?v6" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/jquery-ui.min.js" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/fondo-yt.js?v=2" charset="UTF-8">
    </script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/owl.carousel.min.js"
        charset="UTF-8"></script>
    <script type="text/javascript" src="https://www.inmobiliariadelucia.com.ar/assets/js/de-lucia-home.js?v2"
        charset="UTF-8"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3V0X6PK1RT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-3V0X6PK1RT');
    </script>
    <div id="fb-root"></div>
    <script type="text/javascript">
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=181108668935977";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '226790138403694');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=226790138403694&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</body>

</html>
