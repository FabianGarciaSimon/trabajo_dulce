<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Servicio;
use App\Models\ServicioRegistrado;

class AdminServicesAssignment extends Component
{
    public $serviciosSeleccionados = []; // Agrega esta línea
    // public $doctores;

    public function guardar()
    {
        foreach ($this->serviciosSeleccionados as $userId => $servicioId) {
            // Verifica si el usuario ya tiene un servicio asignado
            if (ServicioRegistrado::where('user_id', $userId)->exists()) {
                session()->flash('messageError', 'Ya se ha guardado el Servicio para este campo.');
                return;
            }

            $doctorId = $this->getDoctorIdForServicio($servicioId);

            ServicioRegistrado::create([
                'doctor_id' => $doctorId,
                'nombreServicio' => $servicioId,
                'user_id' => $userId,
            ]);
        }

        session()->flash('message', 'Datos guardados correctamente');
        return redirect()->to('/admin/users');
    }

    public function isSelected($servicioId, $userId)
    {
        $servicioRegistrado = ServicioRegistrado::where('user_id', $userId)->first();

        if ($servicioRegistrado) {
            return $servicioRegistrado->nombreServicio == $servicioId ? 'selected' : '';
        }

        return '';
    }


    private function getDoctorIdForServicio($servicioId)
    {
        switch ($servicioId) {
            case 1:
                return 10; // ID del Doctor para Atención médica
            case 2:
                return 5; // ID del Doctor para Fisioterapia
            case 3:
                return 9; // ID del Doctor para Psicología
            default:
                return null; // Puedes manejar el caso en que no haya coincidencia o asignar un valor predeterminado.
        }
    }

    private function getResponsableTexto($servicioId)
    {
        switch ($servicioId) {
            case 1:
                return 'Ibeth Hernández';
            case 2:
                return 'Ismael Valencia';
            case 3:
                return 'Dulce María';
            default:
                return 'Desconocido';
        }
    }




    public function render()
    {
        $adultosMayores = User::where('role_id', 2)->get();
        $servicios = Servicio::all();
        // $doctores = User::where('role_id', 2)->get();

        return view('livewire.admin-services-assignment', compact('adultosMayores', 'servicios'));
    }
}
