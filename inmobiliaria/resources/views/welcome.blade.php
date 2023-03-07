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
    {{-- Scripts --}}
    {{-- <script src="../resources/js/bootstrap.min.js"></script> --}}
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
                                <img class="card-img-top imagen" src="{{ asset($inmueble->imagen) }}"
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


    </div>
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
