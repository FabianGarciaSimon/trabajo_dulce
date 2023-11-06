<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Servicio de: ') }}
            @if (auth()->check() && auth()->user()->role_id === 3)
                @if (auth()->user()->id === 10)
                {{ __('Atención Médica') }}
                    {{-- Responsable de Atención Médica --}}
                @elseif (auth()->user()->id === 5)
                {{ __('Fisioterapia') }}
                    {{-- Responsable de Fisioterapia --}}
                @elseif (auth()->user()->id === 9)
                {{ __('Psicología') }}
                    {{-- Responsable de Psicología --}}
                @else
                    {{-- Contenido genérico para otros doctores con role_id 3 --}}
                @endif
            @else
                {{-- Contenido para usuarios no autenticados o con otro rol --}}
            @endif
            
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (auth()->check() && auth()->user()->role_id === 3)
                @if (auth()->user()->id === 10)
                {{-- <div>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        Accesible para el Doctor 1
                    </div>
                </div> --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <livewire:doctor-servicios />
                    </div>
                </div>
                    {{-- Contenido específico para doctor@gmail.com (Responsable de Atención Médica) --}}
                @elseif (auth()->user()->id === 5)
                {{-- <div>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        Accesible para el Doctor 2
                    </div>
                </div> --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <livewire:doctor2-servicios />
                    </div>
                </div>
                    {{-- Contenido específico para doctor2@gmail.com (Responsable de Fisioterapia) --}}
                @elseif (auth()->user()->id === 9)
                {{-- <div>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        Accesible para el Doctor 3
                    </div>
                </div> --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <livewire:doctor3-servicios />
                    </div>
                </div>
                    {{-- Contenido específico para doctor3@gmail.com (Responsable de Psicología) --}}
                @else
                    {{-- Contenido genérico para otros doctores con role_id 3 --}}
                @endif
            @else
                {{-- Contenido para usuarios no autenticados o con otro rol --}}
            @endif
        </div>
    </div>
</x-teacher-layout>
