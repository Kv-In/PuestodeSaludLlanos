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
        Schema::create('tabla_registro_control', function (Blueprint $table) {
            $table->bigIncrements('id_control');
            $table->unsignedBigInteger('id_paciente');  // Foreign key
            $table->unsignedBigInteger('id_insumo');  // Foreign key
            $table->string('medicamento')->nullable();
            $table->boolean('cantidad_entregada')->default(false);
            $table->date('fecha_consulta')->nullable();
            $table->timestamps();

            //relacion 
            $table->foreign('id_paciente')->references('id_paciente')->on('tabla_paciente')->onDelete('cascade');
            $table->foreign('id_insumo')->references('id_insumo')->on('tabla_inventario_insumo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_control');
    }
};
