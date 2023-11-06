<x-guest-layout>
    
    <div class="md:flex">
        <div class="w-full md:w-1/2 flex flex-col items-center justify-center bg-green-400 p-6 text-center">
            <h2 class="text-6xl font-bold">Bienvenido a Vida Plena</h2>
            <p class="mt-4 text-gray-800 text-xl">
                Ingrese sus datos para acceder al sitio
            </p>
        </div>

    <div class="w-full md:w-1/2">
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('login.adulto-mayor') }}" novalidate>
            @csrf
            <a href="{{ route('welcome') }}" class="flex items-center mb-4 text-gray-500 hover:text-gray-900">
                <!-- Icono de flecha hacia atrás -->
                <img class="md:items-start w-15 h-10 inline-block align-text-top" src="{{ asset('storage/img/regresar.png') }}" alt="Regresar"/>
                <p class="font-extrabold text-black">Regresar</p>
            </a>
            <div class="mt-10">
                <x-jet-label for="number_phoneViejito" class="font-extrabold text-black" value="{{ __('Número telefónico') }}" />
                <x-jet-input id="number_phoneViejito" class="block mt-1 w-full" type="text" name="number_phoneViejito" :value="old('number_phoneViejito')" required autofocus />
                
                @error('number_phoneViejito')
                <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Ingresar') }}
                </x-jet-button>
            </div>
        </form>
        
    </x-jet-authentication-card>
</div>
</x-guest-layout>
