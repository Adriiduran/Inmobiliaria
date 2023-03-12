
<section>
    <header>
    <div class="col-lg-12 col-xl-11">
            <h1>{{ __('Cambiar Contraseña') }}</h1>
            <p> {{ __('Asegúrese de que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.
') }}</p>
        </div>
        
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
        <div class="form-group">
            <label for="name">Contraseña actual:</label>
            <input type="password" class="form-control" id="name" name="current_password" type="password" class="mt-1 block w-full" required>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        <div class="form-group">
            <label for="password">Contraseña nueva:</label>
            <input type="password" class="form-control" id="password" name="password" type="password" class="mt-1 block w-full" required>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>
        
        <div class="form-group">
            <label for="password_confirmation">Repita contraseña:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" required>
           
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Guardar.') }}</p>
            @endif
        </div>
    </form>
</section>
