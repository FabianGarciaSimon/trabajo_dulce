<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar mis datos') }}
        </h2>
    </x-slot>

    {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            Accesible para adultos mayores
            <h3>Información del usuario:</h3>
            <p>Nombre: {{ Auth::user()->name }}</p>
            <p>Número telefónico: {{ Auth::user()->number_phoneViejito }}</p>
            <p>Dirección: {{ Auth::user()->viejito_address }}</p>
        </div>
    </div> --}}
    <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
        {{-- <h1 class="font-bold text-xl text-justify">Actualizar mis datos</h1> --}}
        @livewire('update-profile')
    </div>

    @push('scripts')
    <script src="{{ asset('js/inactivity.js') }}"></script>
    @endpush
</x-student-layout>