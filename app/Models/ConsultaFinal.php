<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultaFinal extends Model
{
    use HasFactory;
    protected $table = 'consulta_final';

      // Añade la propiedad fillable
      protected $fillable = [
        'id_consulta', // Usa el nombre correcto
        'estado',
    ];

    // En el modelo TablaConsultum.ph

    public function paciente()
    {
        return $this->belongsTo(TablaPaciente::class, 'id_paciente');
    }
    
    // En el modelo TablaConsultaFinal.php
public function consulta()
{
    return $this->belongsTo(TablaConsultum::class, 'id_consulta');
}
    
}
