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
        Schema::create('tabla_inventario_insumo', function (Blueprint $table) {
            $table->bigIncrements('id_insumo');
            $table->string('nombre');
            $table->integer('cantidad_existente');
            $table->integer('cantidad_entregada')->default(0);
            $table->integer('saldo')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->date('fecha_recepcion')->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario_insumos');
    }
};
