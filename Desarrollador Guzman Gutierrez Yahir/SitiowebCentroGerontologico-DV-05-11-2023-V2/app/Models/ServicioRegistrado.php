<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioRegistrado extends Model
{
    protected $table = 'servicios_registrados';
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id', // Agrega 'doctor_id' a la lista de atributos asignables en masa
        'nombreServicio',
        // Otros atributos que sean asignables en masa
    ];

    // Relación con el doctor que dio el servicio
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    // Relación con el servicio registrado    
    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'nombreServicio');
    }

    // Relación con el adulto mayor    
    public function adultoMayor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
