<section class="infop">
    <div style="margin-left: 40px;">
    

        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')
            <br>
            
            <h2 class="titulo" style="font-size: 30px;">
                {{ __('Eliminar Cuenta') }}
            </h2>

            <p class="parrafo">
                {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control w-50"
                    placeholder="{{ __('Contraseña') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>
            <br>
            <div class="mt-6">
                <x-danger-button  class="btn btn-danger">
                    {{ __('Eliminar Cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </div>
    <br>
    <br>
</section>