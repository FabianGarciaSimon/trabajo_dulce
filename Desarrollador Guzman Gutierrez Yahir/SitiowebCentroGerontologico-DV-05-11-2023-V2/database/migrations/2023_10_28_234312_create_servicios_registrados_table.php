<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosRegistradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_registrados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id'); // Columna para el ID del doctor
            $table->unsignedBigInteger('nombreServicio');
            $table->dateTime('fecha_hora_servicio');
            $table->unsignedBigInteger('user_id'); // Columna para el ID del usuario
            $table->timestamps();

            // Elimina la restricción de llave foránea para nombreServicio
            // $table->foreign('nombreServicio')->references('id')->on('servicios');

            // Conserva la restricción de llave foránea para user_id
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios_registrados');
    }
}
