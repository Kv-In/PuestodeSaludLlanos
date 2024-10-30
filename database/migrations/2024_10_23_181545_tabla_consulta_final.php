<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('consulta_final', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_consulta'); // Referencia a la consulta original
        $table->string('estado')->default('pendiente');
        $table->timestamps();

        // Establecer la relación con la tabla 'consultas'
        $table->foreign('id_consulta')->references('id_consulta')->on('tabla_consulta')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('consulta_final');
}
};
