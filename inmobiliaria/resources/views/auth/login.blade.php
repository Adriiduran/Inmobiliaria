<head>
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
            background-color: #eee;
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

<section class="vh-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black shadow rounded">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Inicio de Sesión</p>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form class="mx-1 mx-md-4" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <x-text-input id="email" class="form-control" type="text"
                                                name="email" :value="old('email')" required autocomplete="username" />
                                            <label class="form-label" for="form3Example1c">Introduce tu email</label>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <x-text-input id="password" class="form-control" type="password"
                                                name="password" required autocomplete="new-password" />
                                            <label class="form-label" for="form3Example1c">Contraseña</label>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Recordarme -->
                                    <div class="form-group">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded" name="remember">
                                            <span>{{ __('Recordarme') }}</span>
                                        </label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center my-5">
                                        @if (Route::has('password.request'))
                                            <a class="text-decoration-none me-3" href="{{ route('password.request') }}">
                                                {{ __('Has olvidado tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Iniciar Sesión</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="./imagenes/login.svg" class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
