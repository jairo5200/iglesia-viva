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
        Schema::create('fiels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
