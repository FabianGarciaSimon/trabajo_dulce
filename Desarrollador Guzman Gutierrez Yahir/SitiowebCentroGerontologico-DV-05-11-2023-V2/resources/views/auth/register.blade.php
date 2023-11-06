<x-guest-layout>
    <x-jet-authentication-card>
        
        <div class="md:flex">
            <x-slot name="logo">
                    <x-jet-authentication-card-logo />
            </x-slot>
        </div>
        

        <x-jet-validation-errors class="mb-4" />

        {{-- Formulario de registro para el edulto mayor --}}
        <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2}" novalidate>
            @csrf
            <a href="{{ route('welcome') }}" class="flex items-center mb-4 text-gray-500 hover:text-gray-900">
                <!-- Icono de flecha hacia atrás -->
                <img class="md:items-start w-15 h-10 inline-block align-text-top" src="{{ asset('storage/img/regresar.png') }}" alt="Regresar"/>
                <p class="font-extrabold text-black">Regresar</p>
            </a>
            {{-- Nombre del usuario --}}
            <div class="mt-10">
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')" name="name" required autofocus autocomplete="name" />
                {{-- mensaje de error para mostrar en el input --}}
                @error('name')
                    <div class="text-red-500">{{ $message }}</div> 
                @enderror
            </div>

            {{-- Numero télefonico del adulto mayor --}}
            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="number_phoneViejito" value="{{ __('Número telefónico') }}" />
                <x-jet-input id="number_phoneViejito" class="block mt-1 w-full" type="text" wire:model="number_phoneViejito" :value="old('number_phoneViejito')"  name="number_phoneViejito" />
                
                {{-- mensaje de error para mostrar en el input --}}
                @error('number_phoneViejito')
                    <div class="text-red-500">{{ $message }}</div> 
                @enderror
            </div>

            {{-- La Dirección se mostrara solo si se elige el rol 
            de Adulto mayor --}}
            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="viejito_address" value="{{ __('Dirección') }}" />
                <x-jet-input id="viejito_address" class="block mt-1 w-full" type="text" wire:model="viejito_address" :value="old('viejito_address')"  name="viejito_address" />
                {{-- mensaje de error para mostrar en el input --}}
                @error('viejito_address')
                    <div class="text-red-500">{{ $message }}</div> 
                @enderror
            </div>

            {{-- Talleres en donde se van a incribir los adultos mayores --}}
            <div class="mt-4">
                <x-jet-label class="text-center font-bold" for="talleres" value="{{ __('Talleres') }}" />
                <div class="flex items-center space-x-10">

                    {{-- Taller de cocina  --}}
                    <div>
                        <x-jet-label for="taller1" value="{{ __('Cocina') }}" />
                        <x-jet-input id="taller1" type="checkbox" value="cocina"  wire:model="taller1" name="taller1" />
                    </div>

                    {{-- Taller de danza  --}}
                    <div>
                        <x-jet-label for="taller2" value="{{ __('Danza') }}" />
                        <x-jet-input id="taller2" type="checkbox" value="danza"  wire:model="taller2" name="taller2" />
                    </div>

                    {{-- Taller de papel nono  --}}
                    <div>
                        <x-jet-label for="taller3" value="{{ __('Papel Nono') }}" />
                        <x-jet-input id="taller3" type="checkbox" value="papelnono"  wire:model="taller3" name="taller3" />
                    </div>
                </div>
            </div>

            {{-- El Nombre del tutor se mostrara solo si se elige el rol 
            de Adulto mayor --}}
            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="name_tutor" value="{{ __('Nombre de la persona responsable') }}" />
                <x-jet-input id="name_tutor" class="block mt-1 w-full" type="text" wire:model="name_tutor" :value="old('name_tutor')" name="name_tutor"  autofocus autocomplete="name_tutor" />
                {{-- mensaje de error para mostrar en el input --}}
                @error('name_tutor')
                    <div class="text-red-500">{{ $message }}</div> 
                @enderror
            </div>

            {{-- El Número del tutor se mostrara solo si se elige el rol 
            de Adulto mayor --}}
            <div class="mt-4" x-show="role_id == 2">
                <x-jet-label for="number_phoneTutor" value="{{ __('Número telefónico de la persona responsable') }}" />
                <x-jet-input id="number_phoneTutor" class="block mt-1 w-full" type="text" wire:model="number_phoneTutor" :value="old('number_phoneTutor')" name="number_phoneTutor" />

                {{-- mensaje de error para mostrar en el input --}}
                @error('number_phoneTutor')
                    <div class="text-red-500">{{ $message }}</div> 
                @enderror
            </div>

            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estas registrado?') }}
                </a> --}}

                {{-- Botón para registrar los datos ingresados en el formulario --}}
                <x-jet-button class="ml-4">
                    {{ __('Registrar') }}
                </x-jet-button>
            </div>
        </form>

        
        
    </x-jet-authentication-card>

    <script>
        // detecta si el usuario regresa a la página
window.addEventListener('pageshow', function(event) {

if (event.persisted) {
    // limpia los campos del formulario
    document.getElementById('name').value = '';
    document.getElementById('number_phoneViejito').value = '';
    document.getElementById('viejito_address').value = '';
    document.getElementById('name_tutor').value = '';
    document.getElementById('number_phoneTutor').value = '';
    // muestra un mensaje
    alert('Los datos del formulario se han limpiado');

}

});

        // document.addEventListener("DOMContentLoaded", function() {
        //     document.getElementById("buscarNumero").addEventListener("click", function() {
        //         var numero = document.getElementById("number_phoneViejito").value;
                
        //         // Realiza una petición AJAX para buscar el número en la base de datos
        //         var xhr = new XMLHttpRequest();
        //         xhr.open("GET", "/buscarNumero/" + numero, true);
        //         xhr.onreadystatechange = function() {
        //             if (xhr.readyState === 4) {
        //                 if (xhr.status === 200) {
        //                     var data = JSON.parse(xhr.responseText);
        //                     // Rellena los campos con los datos obtenidos de la base de datos
        //                     document.getElementById("name").value = data.name || '';
        //                     document.getElementById("email").value = data.email || '';
        //                     document.getElementById("viejito_address").value = data.viejito_address || '';
        //                     document.getElementById("name_tutor").value = data.name_tutor || '';
        //                     document.getElementById("number_phoneTutor").value = data.number_phoneTutor || '';
                            
        //                     // Ahora, establece el valor del campo number_phoneViejito
        //                     document.getElementById("number_phoneViejito").value = numero;
        //                 } else if (xhr.status === 404) {
        //                     alert("Número no encontrado en la base de datos");
        //                 }
        //             }
        //         };
        //         xhr.send();
        //     });

        //     // El botón de "Actualizar" también debe estar dentro de este bloque de código
        //     document.getElementById("actualizarButton").addEventListener("click", function() {
        //         document.querySelector("form").submit();
        //     });
        // });
    </script>
</x-guest-layout>
