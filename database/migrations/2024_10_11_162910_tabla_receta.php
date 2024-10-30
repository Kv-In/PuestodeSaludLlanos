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
        Schema::create('tabla_receta', function (Blueprint $table) {
            $table->bigIncrements('id_receta');
            $table->unsignedBigInteger('id_consulta');  // Foreign key
            // $table->bigInteger('dpi_paciente');  // 
            $table->date('fecha_emision');
            $table->text('contenido_receta');
            $table->string('firma')->nullable();
            $table->string('sello')->nullable();
            $table->timestamps();

            //Relaciones con paciente
            $table->foreign('id_consulta')->references('id_consulta')->on('tabla_consulta')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
