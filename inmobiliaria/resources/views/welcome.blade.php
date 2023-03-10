<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Styles --}}
    <style>
        /*Simple Normalize*/
        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            padding: 0;
        }

        @media (min-width: 768px) {
            .imagen {
                max-height: 12rem;
            }
        }
    </style>
    <link rel="stylesheet" href="resources/css/styles.css">
    <script src="../resources/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="container-fluid">
        {{-- Navbar --}}
        <div class="row">
            <div class="col p-0">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <div class="container-fluid d-flex align-items-center">
                        <a class="navbar-brand" href="#"><img src="/imagenes/logo.png" width="60"
                                height="30" alt="">Inmobiliaria Laravel</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
                            <ul class="navbar-nav container-fluid">
                                @if (Route::has('login'))
                                    @auth
                                        <form method="POST" action="{{ route('logout') }}"
                                            class="container-fluid d-flex justify-content-end align-items-center flex-column flex-sm-row">
                                            @csrf
                                            <div>
                                                <h5 class="h5 text-dark"><span><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" fill="currentColor"
                                                            class="bi bi-person" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                                        </svg></span>{{ Auth::user()->name }}</h5>
                                            </div>
                                            <div class="ms-3">
                                                <li><h5><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</h5></a>
                                                </li>
                                            </div>
                                            <div class="ms-3">
                                                <li class="nav-item h5 text-dark">
                                                    <button type="submit" class="btn btn-danger">
                                                        <span> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                                            </svg></span>
                                                        {{ __('Cerrar Sesion') }}
                                                    </button>
                                                </li>
                                            </div>
                                        </form>
                                    @else
                                        <div
                                            class="container-fluid d-flex justify-content-end align-items-center flex-column flex-sm-row">
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="{{ route('login') }}"><span> <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-box-arrow-in-right"
                                                            viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                                            <path fill-rule="evenodd"
                                                                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                                        </svg></span> Iniciar Sesión</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a href="{{ route('register') }}" class="nav-link text-dark"> <span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-person-add"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                                                <path
                                                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                                            </svg></span> Registrarse</a>
                                                </li>
                                            @endif
                                        </div>
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Hero -->
        <div class="row">
            <div class="col p-0">
                <div class="container col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="/imagenes/hero.svg" class="d-block mx-lg-auto img-fluid" alt="Hero Img"
                                width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">Encuentra las mejores viviendas aquí</h1>
                            <p class="lead">Tenemos las mejores viviendas y ofertas que podrá encontrar en el mercado
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="container-fluid text-center my-5">
        <h1 class="display-5 fw-bold mb-5">Nuestras viviendas disponibles</h1>
        <div class="card-group">
            <div class="row">
                @foreach ($inmuebles as $inmueble)
                    <div class="col-12 col-lg-4 col-md-6 my-2">
                        <div class="card text-center border border-dark h-100 rounded">
                            <div class="card-body p-0">
                                <img class="card-img-top img-fluid" src="{{ asset($inmueble->imagen) }}"
                                    alt="Card image cap">
                                <div class="p-4 d-flex align-items-center flex-column g-1">
                                    <h4 class="card-title">{{ $inmueble->direccion }}</h4>
                                    <p class="card-text">{{ $inmueble->descripcion }}</p>
                                    <p class="card-text">Población: {{ $inmueble->poblacion }}</p>
                                    <small
                                        class="text-muted font-weight-bold">{{ $inmueble->metrosCuadrados }}m2</small>
                                    <h3 class="card-text">{{ $inmueble->precio }}€</h3>
                                    </h3>
                                    @if (Route::has('login'))
                                        @auth
                                            @if ($inmueble->reserva == 'no')
                                                <p class="card-text"><small class="text-muted">
                                                        <form method="POST"
                                                            action="{{ url("welcome/{$inmueble->id}") }}">
                                                            @csrf
                                                            @method('put')

                                                            <button type="submit" class="btn btn-success btn-xs"
                                                                value="{{ Auth::user()->email }}"
                                                                name="reservado">RESERVAR<i class="fa fa-trash"
                                                                    aria-hidden="true"></i></button>
                                                        </form>


                                                    </small> </p>
                                            @else
                                                @if ($inmueble->reserva == Auth::user()->email)
                                                    <form method="POST" action="{{ url("welcome/{$inmueble->id}") }}">
                                                        @csrf
                                                        @method('put')

                                                        <button type="submit" class="btn btn-danger btn-xs"
                                                            value="no" name="reservado">ELIMINAR RESERVA<i
                                                                class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </form>
                                                @else
                                                    <p class="card-text"><small class="text-muted">RESERVADO
                                                            {{ $inmueble->reserva }}</small> </p>
                                                @endif
                                            @endif
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook" viewBox="0 0 16 16">
            <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </symbol>
    </svg>
    <div class="container mt-5 p-2">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img src="/imagenes/logo.png" width="60" height="30" alt="">
                </a>
                <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Inmobiliaria Laravel</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#instagram" />
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#facebook" />
                        </svg></a></li>
            </ul>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
