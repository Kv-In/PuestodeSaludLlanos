<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetaFinal extends Model
{
    use HasFactory;

    protected $table = 'receta_final';

    // Añade la propiedad fillable
    protected $fillable = [
      'id',  
      'id_receta', // Usa el nombre correcto
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


public function receta()
{
  return $this->belongsTo(TablaRecetum::class, 'id_receta');
}

}
