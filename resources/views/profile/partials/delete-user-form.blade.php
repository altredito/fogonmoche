<section class="infop">
    <div style=" margin-left: 40px;">
        <header>
            <br>
            <h2 class="titulo" style="font-size: 30px;">
                {{ __('Eliminar Cuenta') }}
            </h2>
    
            <p class="parrafo">
                {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.') }}
            </p>
        </header>
    
        <x-danger-button class="btn btn-danger"
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >{{ __('Eliminar Cuenta') }}</x-danger-button>
    
        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')
    
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('¿Estas seguro de eliminar tu cuenta?') }}
                </h2>
    
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.') }}
                </p>
    
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />
    
                    <x-text-input
                        id="password"
                        name="password"
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('Contraseña') }}"
                    />
    
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>
    
                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancelar') }}
                    </x-secondary-button>
    
                    <x-danger-button class="ml-3">
                        {{ __('Eliminar Cuenta') }}
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </div>
   <br>
   <br>
</section>
