
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
        <table>
            <thead>
                <tr>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Adulto</th>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Teléfono</th>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Dirección</th>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Talleres</th> 
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Servicio</th>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Responsable</th>
                    <th class="w-1/4 border border-green-600 text-green-600 font-bold">Servicio Asignado</th>
                </tr>
            </thead>

            <tbody class="border border-green-400">
                @foreach($adultosMayores as $adultoMayor)
                    <tr>
                        <td class="font-bold border border-green-600">{{ $adultoMayor->name }}</td>
                        <td class="border border-green-600">{{ $adultoMayor->number_phoneViejito }}</td>
                        <td class="border border-green-600">{{ $adultoMayor->viejito_address }}</td>
                        <td class="border border-green-600">
                            {{ $adultoMayor->taller1 }}, 
                            {{ $adultoMayor->taller2 }},
                            {{ $adultoMayor->taller3 }}
                        </td>
                        <td class="border border-green-600">
                            <select wire:model="serviciosSeleccionados.{{ $adultoMayor->id }}">
                                <option value="">Seleccionar Servicio</option>
                                <option value="1" {{ $this->isSelected(1, $adultoMayor->id) }}>Atención médica</option>
                                <option value="2" {{ $this->isSelected(2, $adultoMayor->id) }}>Fisioterapia</option>
                                <option value="3" {{ $this->isSelected(3, $adultoMayor->id) }}>Psicología</option>
                            </select>
                        </td>
                        <td class="border border-green-600">
                            @if (isset($serviciosSeleccionados[$adultoMayor->id]))
                                @php
                                    $servicioId = $serviciosSeleccionados[$adultoMayor->id];
                                    $responsable = $this->getResponsableTexto($servicioId);
                                @endphp
                                {{ $responsable }}
                            @endif
                        </td>
                        
                        @foreach($adultoMayor->serviciosRegistrados as $servicioRegistrado)
                            <td class="border border-green-600">{{ $servicioRegistrado->servicio->nombreServicio }}</td>
                            
                        @endforeach
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5 flex items-center">
        <button class="inline-flex px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-green-400 active:bg-gray-900 focus:outline-none focus:border-green-500 focus:ring focus:ring-gray-900 disabled:opacity-25 transition" wire:click="guardar">Guardar</button>
    </div>

</div>