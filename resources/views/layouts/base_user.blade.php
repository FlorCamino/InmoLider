<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InmoLider</title>
    <!-- Bootstrap CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/base_user.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <!--Icons-->
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <!-- Favicons -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

</head>

<body>

    <header>
        <nav role="navigation" class="navbar navbar-expand-md">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li class="navbar-brand">
                                <a href="#" class="nav-link">
                                    <span class="iconify" data-icon="material-symbols:home-app-logo" data-width="30"
                                        data-height="30"></span>
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">
                                    <span class="iconify" data-icon="material-symbols:format-list-bulleted-add-rounded"
                                        data-width="30" data-height="30"></span>
                                    Servicios
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">
                                    <span class="iconify" data-icon="ic:baseline-contact-phone" data-width="30"
                                        data-height="30"></span>
                                    Contacto
                                </a>
                            </li>

                            <li class="icon">
                                <img class="bi" width="80" height="60" role="img"
                                    src="{{ asset('img/logo.jpg') }}" alt="logo">
                            </li>
                            <li>
                                <a href="#" class="nav-link">
                                    <span class="iconify" data-icon="mdi:information-outline" data-width="30"
                                        data-height="30"></span>
                                    Nosotros
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">
                                    <span class="iconify" data-icon="arcticons:maps" data-width="30"
                                        data-height="30"></span>
                                    Ubicación
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link">
                                    <span class="iconify" data-icon="tabler:brand-gravatar" data-width="30"
                                        data-height="30"></span>
                                    Bienvenido/a
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>InmoLider <img width="60" height="35" role="img" src="{{ asset('img/logo.jpg') }}"
                    alt="logo"></h3>


            <p class="footer-company-name">InmoLider © Derechos reservados 2022</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Islas Malvinas 1834</span> Rio Grande, AeIAS</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+542964423654</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>¿Porque InmoLider?</span>
                Por nuestra trayectoria, pasión y entusiasmo.
                Brindamos a nuestros clientes asesoramiento
                profesional y atención cordial.
            </p>

        </div>

    </footer>

    <!-- CDN Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
{{-- 
<!-- example 5 left and center only with empty space right -->
<nav class="navbar navbar-expand-sm navbar-dark bg-primary flex-sm-nowrap flex-wrap">
  <div class="container-fluid">
      <button class="navbar-toggler flex-grow-sm-1 flex-grow-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5">
          <span class="navbar-toggler-icon"></span>
      </button>
      <span class="navbar-brand flex-grow-1">Navbar 5</span>
      <div class="navbar-collapse collapse flex-grow-1 justify-content-center" id="navbar5">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Codeply</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
          </ul>
      </div>
      <div class="flex-grow-1">
          <!--spacer-->
      </div>
  </div>
</nav> --}}
