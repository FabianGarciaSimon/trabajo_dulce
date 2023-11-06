<div>
    <h2 class="font-bold text-3xl text-gray-800 leading-tight text-center mb-6">
        Servicios
    </h2>
    @if (session()->has('message'))
        <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('messageError'))
    <div class="uppercase border border-red-600 bg-red-100 text-red-600 font-bold p-2 my-3 text-sm">
        {{ session('messageError') }}
    </div>
    @endif

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Nombre</th>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Servicio</th>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Fecha y Hora</th> <!-- Modifica el encabezado para incluir Fecha y Hora -->
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Acción</th> <!-- Agrega una columna para la acción de guardar -->
                </tr>
            </thead>
            <tbody class="border border-green-400">
                @foreach($doctores as $doctor)
                    @foreach($doctor->serviciosRegistrados as $servicioRegistrado)
                        <tr>
                            <td class="font-bold border border-green-400">{{ $doctor->name }}</td>
                            <td class="font-bold border border-green-400">{{ $servicioRegistrado->servicio->nombreServicio }}</td>
                            <td class="border border-green-400">
                                <!-- Agrega un campo de entrada para fecha y hora -->
                                <input type="datetime-local" wire:model="fechaHoraServicio.{{ $servicioRegistrado->id }}">
                            </td>
                            <td class="border border-green-400">
                                <!-- Agrega un botón para guardar -->
                                <button class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-bold text-xs text-black uppercase tracking-widest hover:bg-green-400 active:bg-gray-900 focus:outline-none focus:border-green-500 focus:ring focus:ring-gray-900 disabled:opacity-25 transition" 
                                wire:click="guardarFechaHora({{ $servicioRegistrado->id }})">Guardar</button>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>