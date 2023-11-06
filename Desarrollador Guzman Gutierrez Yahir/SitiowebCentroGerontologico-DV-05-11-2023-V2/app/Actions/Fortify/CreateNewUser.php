<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Rules\AtLeastOneTallerSelected;


use Illuminate\Validation\Rule;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'], // Solo letras y espacios
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'number_phoneViejito' => ['required', 'numeric', 'digits:10', Rule::unique('users', 'number_phoneViejito')],
            'number_phoneTutor' => ['required', 'numeric', 'digits:10'],
            'viejito_address' => ['required'],
            'name_tutor' => ['required', 'regex:/^[A-Za-z\s]+$/'], // Solo letras y espacios
            'taller1' => ['nullable'],  // Se espera un valor booleano (true/false) para los talleres
            'taller2' => ['nullable'],
            'taller3' => ['nullable'],
            'servicio'  => ['nullable'],
            'talleres' => [new AtLeastOneTallerSelected], // Agrega la regla personalizada
        ]);

        $validator->validate();

        // Establece manualmente el valor del rol
        $input['role_id'] = 2;

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'] ?? null,
            'role_id' => $input['role_id'],
            'number_phoneViejito' => $input['number_phoneViejito'] ?? null,
            'viejito_address' => $input['viejito_address'] ?? null,
            'name_tutor' => $input['name_tutor'] ?? null,
            'number_phoneTutor' => $input['number_phoneTutor'] ?? null,
            'taller1' => $input['taller1'] ?? null,
            'taller2' => $input['taller2'] ?? null,
            'taller3' => $input['taller3'] ?? null,
            'servicio' => $input['servicio'] ?? null,

        ]);
    }
}
