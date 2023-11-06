<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\User;

class UpdateProfile extends Component
{
    public $user_id;
    public $name;
    public $number_phoneViejito;
    public $viejito_address;
    public $taller1;
    public $taller2;
    public $taller3;
    public $name_tutor;
    public $number_phoneTutor;

    protected $rules = [
        'name' => 'required|string',
        'number_phoneViejito' => 'required|numeric|digits:10',
        'viejito_address' => 'required',
        'taller1' => 'boolean',
        'taller2' => 'boolean',
        'taller3' => 'boolean',
        'name_tutor' => 'required',
        'number_phoneTutor' => 'required|numeric|digits:10',
    ];

    public function mount()
    {
        $user = Auth::user();

        $this->name = $user->name;
        $this->number_phoneViejito = $user->number_phoneViejito;
        $this->viejito_address = $user->viejito_address;
        $this->taller1 = $user->taller1;
        $this->taller2 = $user->taller2;
        $this->taller3 = $user->taller3;
        $this->name_tutor = $user->name_tutor;
        $this->number_phoneTutor = $user->number_phoneTutor;
    }
    public function updateProfile()
    {
        $userId = Auth::id();
        $user = User::find($userId);

        // Asignar los valores
        $user->name = $this->name;
        $user->number_phoneViejito = $this->number_phoneViejito;
        $user->viejito_address = $this->viejito_address;
        $user->taller1 = $this->taller1 ? 'cocina' : null;
        $user->taller2 = $this->taller2 ? 'danza' : null;
        $user->taller3 = $this->taller3 ? 'papelnono' : null;
        $user->name_tutor = $this->name_tutor;
        $user->number_phoneTutor = $this->number_phoneTutor;

        // Guardar los datos
        $user->save();


        return redirect()->route('adulto_mayor.lessons.index')->with('refresh', true);
    }

    public function render()
    {
        return view('livewire.update-profile');
    }
}
