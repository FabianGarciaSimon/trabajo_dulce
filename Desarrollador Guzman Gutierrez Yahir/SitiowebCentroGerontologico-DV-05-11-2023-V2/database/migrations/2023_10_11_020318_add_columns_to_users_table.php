<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('taller1')->nullable();
            $table->string('taller2')->nullable();
            $table->string('taller3')->nullable();
            $table->string('servicio')->nullable();
            $table->string('fecha_taller1')->nullable();
            $table->string('fecha_taller2')->nullable();
            $table->string('fecha_taller3')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['taller1', 'taller2', 'taller3', 'servicio', 'fecha_taller1', 'fecha_taller2', 'fecha_taller3']);
        });
    }
}
