<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->id();
            $table->integer('numeral')->autoIncrement()->from(1)->unsigned();
            $table->string('nombre');
            $table->string('horario')->nullable(true);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('paga_inscripcion')->nullable(true);
            $table->string('paga_grado')->nullable(true);
            $table->string('nota_final')->nullable(true);
            $table->string('diploma')->nullable(true);
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
