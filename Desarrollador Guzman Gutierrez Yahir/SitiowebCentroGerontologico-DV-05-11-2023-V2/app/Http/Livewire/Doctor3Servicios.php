<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\ServicioRegistrado;

class Doctor3Servicios extends Component
{
    public $doctores;
    public $fechaHoraServicio = [];


    public function guardarFechaHora($servicioRegistradoId)
    {
        $servicioRegistrado = ServicioRegistrado::find($servicioRegistradoId);

        if ($servicioRegistrado) {
            if ($servicioRegistrado->fecha_hora_servicio) {
                session()->flash('messageError', 'Ya se ha guardado una fecha y hora para este servicio.');
                return;
            }

            $servicioRegistrado->fecha_hora_servicio = $this->fechaHoraServicio[$servicioRegistradoId];
            $servicioRegistrado->save();
            session()->flash('message', 'Fecha y hora guardadas correctamente.');
        }
    }

    public function render()
    {
        // Filtra los registros de servicios registrados relacionados con el Doctor 1 (ID 10)
        $this->doctores = User::where('role_id', 2)
            ->whereHas('serviciosRegistrados', function ($query) {
                $query->where('doctor_id', 9); // Ajusta el ID del Doctor 1 según tu estructura de base de datos
            })
            ->get();

        return view('livewire.doctor3-servicios');
    }
}
