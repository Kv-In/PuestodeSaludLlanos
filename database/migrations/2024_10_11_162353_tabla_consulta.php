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
        Schema::create('tabla_consulta', function (Blueprint $table) {
            $table->bigIncrements('id_consulta');
            $table->unsignedBigInteger('id_paciente');  // Foreign key
            $table->date('fecha');
            $table->string('motivo_consulta')->nullable();
            $table->string('presion_arterial')->nullable();
            $table->decimal('peso', 8, 2)->nullable();
            $table->text('diagnostico')->nullable();
            $table->string('tratamiento')->nullable();
            $table->string('firma_medica')->nullable();
            $table->timestamps();

            //relacion con paciente
            $table->foreign('id_paciente')->references('id_paciente')->on('tabla_paciente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
