<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    // relacion con la tabla users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // relacion con la tabla servicios_Registrados
    public function serviciosRegistrados()
    {
        return $this->hasMany(ServicioRegistrado::class, 'nombreServicio');
    }
}
