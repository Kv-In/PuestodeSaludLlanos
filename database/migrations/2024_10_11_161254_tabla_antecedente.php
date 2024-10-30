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
        Schema::create('tabla_antecedente', function (Blueprint $table) {
            $table->bigIncrements('id_antecedente');
            $table->unsignedBigInteger('id_paciente');  // Foreign key
            $table->string('medicos')->nullable();
            $table->string('quirurgicos')->nullable();
            $table->string('traumaticos')->nullable();
            $table->string('alergicos')->nullable();
            $table->string('familiares')->nullable();
            $table->timestamps();

            //relacion paciente
            $table->foreign('id_paciente')->references('id_paciente')->on('tabla_paciente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antecedentes');
    }
};
