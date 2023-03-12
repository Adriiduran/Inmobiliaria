<section>
    <header>

        <div class="col-lg-12 col-xl-11">
            <h1>{{ __('Informacon del perfil') }}</h1>
            <p> {{ __("Actualice la información de perfil y la dirección de correo electrónico de su cuenta.") }}</p>
        </div>

    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Correo:</label>
            <input name="email" type="email" class="form-control" id="email">

        </div>



        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>
            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Guardar.') }}</p>
            @endif
        </div>
    </form>
</section>