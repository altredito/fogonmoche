<section class="infop">
    <div style=" margin-left: 40px;">
    <header>
        <br>
        <h2 class="titulo" style="font-size: 30px;">
            {{ __('Actualizar Contraseña') }}
        </h2>

        <p class="parrafo">
            {{ __('Asegúrese de que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Contraseña Actual')" class="text"/>
            <x-text-input id="current_password" name="current_password" type="password" class="parrafo form-control w-50" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Nueva Contraseña')" class="text"/>
            <x-text-input id="password" name="password" type="password" class="parrafo form-control w-50" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirma Contraseña')" class="text"/>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="parrafo form-control w-50" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
        <br>
        <div class="flex items-center gap-4">
            <x-primary-button class="registro" >{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    </div>
    <br>
    
</section>
