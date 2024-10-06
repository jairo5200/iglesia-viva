<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * se crea la tabla informes en la base de datos
     */
    public function up(): void
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion');
            $table->unsignedBigInteger('user_id');
            $table->date('fecha');
            $table->string('total_adultos');
            $table->string('adultos_nuevos');
            $table->string('adultos_asistentes');
            $table->string('discipulos');
            $table->string('escuelas');
            $table->string('visitas');
            $table->string('total_ninos');
            $table->string('ninos_nuevos');
            $table->string('hermanos_planeando');
            $table->string('ofrenda')->nullable();
            $table->string('actividad')->nullable();
            $table->string('actividad_proyectada')->nullable();
            $table->string('fecha_actividad_proyectada')->nullable();
            $table->string('solicitud')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes');
    }
};
