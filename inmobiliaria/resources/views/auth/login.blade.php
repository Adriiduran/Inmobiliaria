@vite(['/resources/js/datatables-simple-demo.js', '/resources/js/scripts.js', '/resources/css/styles.css', '/resources/js/app.js', '/resources/js/tables2.js'])
<link rel="stylesheet" href="resources/css/styles.css">
    <script src="resources/js/boostrap.min.js"></script>
    <script src="resources/js/scripts.js"></script>
    <script src="resources/js/app.js"></script>
    <script src="resources/js/tables2.js"></script>

<body class="bg-primary">


    <div class="container bg-gradient-primary">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Inicio de Sesión</h1>
                                    </div>
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form method="POST" action="{{ route('login') }}">

                                        @csrf

                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <!-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> -->
                                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Introduce tu email" name="email" :value="old('email')">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group">
                                            <x-input-label for="password" :value="__('Contraseña')" />

                                            <!-- <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" /> -->

                                            <input type="password" class="form-control form-control-user" id="password" aria-describedby="emailHelp" placeholder="Introduce tu contraseña" name="password" required autocomplete="current-password">

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Recordarme -->
                                        <div class="form-group">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recordarme') }}</span>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-items-between mt-4 g-3 container-fluid">
                                            @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                {{ __('Has olvidad tu contraseña?') }}
                                            </a>
                                            @endif

                                            <button class="btn btn-primary btn-user btn-block">
                                                {{ __('Iniciar Sesión') }}
                                            </button>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>