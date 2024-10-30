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
        Schema::create('receta_final', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_receta'); // Referencia a la consulta original
            $table->string('estado')->default('pendiente');
            $table->timestamps();
    
            // Establecer la relación con la tabla 'consultas'
            $table->foreign('id_receta')->references('id_receta')->on('tabla_receta')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta_final');
    }
};
