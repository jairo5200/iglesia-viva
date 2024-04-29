<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * se crea la tabla fiels en la base de datos
     */
    public function up(): void
    {
        Schema::create('fiels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_documento');
            $table->string('name');
            $table->date('fecha_de_nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->date('fecha_de_ingreso');
            $table->string('cargo');
            $table->string('escuela_actual');
            $table->string('imagen')->nullable(true);
            $table->unsignedBigInteger('iglesia_id');
            $table->foreign('iglesia_id')->references('id')->on('iglesias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiels');
    }
};
