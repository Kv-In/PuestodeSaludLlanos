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
        Schema::create('tabla_paciente', function (Blueprint $table) {
            $table->bigIncrements('id_paciente'); //primary key
            $table->string('nombre');
            $table->integer('edad');
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otro']);  // Definir valores posibles para enum
            $table->string('estado_civil')->nullable();
            $table->string('etnia')->nullable();
            $table->string('puesto_servicio')->nullable();
            $table->string('region_presupuestario')->nullable();
            $table->string('unidad_administrativa')->nullable();
            $table->bigInteger('dpi_cui')->nullable(false);            // DPI/CUI debe ser único
            $table->bigInteger('telefono')->nullable();
            $table->string('emergencia_nombre')->nullable();
            $table->bigInteger('emergencia_telefono')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
