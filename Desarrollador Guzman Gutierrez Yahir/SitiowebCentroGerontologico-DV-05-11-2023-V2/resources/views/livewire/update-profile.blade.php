<form class="md:w-1/2 space-y-5" wire:submit.prevent="updateProfile">
    {{-- Nombre del usuario --}}
    <div class="mt-10">
        <x-jet-label for="name" value="{{ __('Nombre') }}" />            
        <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')" name="name" required autofocus autocomplete="name" />
            @error('name')
            <div class="text-red-500">{{ $message }}</div> 
            @enderror
    </div>

    {{-- Numero télefonico del adulto mayor --}}
    <div class="mt-4" x-show="role_id == 2">
        <x-jet-label for="number_phoneViejito" value="{{ __('Número telefónico') }}" />
        <x-jet-input id="number_phoneViejito" class="block mt-1 w-full" type="text" wire:model="number_phoneViejito" :value="old('number_phoneViejito')" readonly/>
        @error('number_phoneViejito')
        <div class="text-red-500">{{ $message }}</div> 
        @enderror
    </div>

    {{-- La Dirección se mostrara solo si se elige el rol 
    de Adulto mayor --}}
    <div class="mt-4" x-show="role_id == 2">
        <x-jet-label for="viejito_address" value="{{ __('Dirección') }}" />
        <x-jet-input id="viejito_address" class="block mt-1 w-full" type="text" wire:model="viejito_address" :value="old('viejito_address')"/>
        @error('viejito_address')
        <div class="text-red-500">{{ $message }}</div> 
        @enderror
    </div>

    {{-- Talleres en donde se van a inscribir los adultos mayores --}}
    <div class="mt-4">
        <x-jet-label class="text-center text-lg font-bold" value="{{ __('Talleres') }}" />
        <div class="flex items-center space-x-10">
            {{-- Taller de cocina  --}}
            <div>
                <label for="taller1">{{ __('Cocina') }}</label>
                <input id="taller1" type="checkbox" wire:model="taller1" />
            </div>

            {{-- Taller de danza  --}}
            <div>
                <label for="taller2">{{ __('Danza') }}</label>
                <input id="taller2" type="checkbox" wire:model="taller2" />
            </div>

            {{-- Taller de papel nono  --}}
            <div>
                <label for="taller3">{{ __('Papel Nono') }}</label>
                <input id="taller3" type="checkbox" wire:model="taller3" />
            </div>
        </div>
    </div>

    {{-- El Nombre del tutor se mostrará solo si se elige el rol 
    de Adulto mayor --}}
    <div class="mt-4" x-show="role_id == 2">
        <x-jet-label for="name_tutor" value="{{ __('Nombre de la persona responsable') }}" />
        <x-jet-input id="name_tutor" class="block mt-1 w-full" type="text" wire:model="name_tutor" :value="old('name_tutor')"/>
        @error('name_tutor')
        <div class="text-red-500">{{ $message }}</div> 
        @enderror
    </div>

    {{-- El Número del tutor se mostrará solo si se elige el rol 
    de Adulto mayor --}}
    <div class="mt-4" x-show="role_id == 2">
        <x-jet-label for="number_phoneTutor" value="{{ __('Número telefónico de la persona responsable') }}" />
        <x-jet-input id="number_phoneTutor" class="block mt-1 w-full" type="text" wire:model="number_phoneTutor" :value="old('number_phoneTutor')" />
        @error('number_phoneTutor')
        <div class="text-red-500">{{ $message }}</div> 
        @enderror
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-jet-button>
            {{ __('Actualizar') }}
        </x-jet-button>
    </div>
</form>
