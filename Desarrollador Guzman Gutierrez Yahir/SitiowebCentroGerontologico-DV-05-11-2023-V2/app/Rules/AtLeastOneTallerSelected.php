<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AtLeastOneTallerSelected implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Verifica que al menos uno de los tres talleres esté seleccionado
        return $value['taller1'] || $value['taller2'] || $value['taller3'];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Debes seleccionar al menos un taller.';
    }
}
