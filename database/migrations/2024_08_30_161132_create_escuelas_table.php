<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * se crea la tabla escuelas en la base de datos
     */
    public function up(): void
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('horario')->nullable(true);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('paga_inscripcion')->nullable(true);
            $table->string('paga_grado')->nullable(true);
            $table->string('nota_final')->nullable(true);
            $table->string('diploma')->nullable(true);
            $table->unsignedBigInteger('fiel_id');
            $table->foreign('fiel_id')->references('id')->on('fiels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escuelas');
    }
};
