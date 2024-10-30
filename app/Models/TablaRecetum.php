<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TablaRecetum
 *
 * @property $id_receta
 * @property $id_paciente
 * @property $dpi_paciente
 * @property $fecha_emision
 * @property $contenido_receta
 * @property $firma
 * @property $sello
 * @property $created_at
 * @property $updated_at
 *
 * @property TablaPaciente $tablaPaciente
 * @property TablaPaciente $tablaPaciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TablaRecetum extends Model
{
    protected $table = 'tabla_receta'; // Asegúrate de que este sea el nombre correcto en tu base de datos

    protected $perPage = 20;
    protected $primaryKey = 'id_receta';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_receta', 'id_consulta', 'dpi_paciente', 'fecha_emision', 'contenido_receta', 'firma', 'sello'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
  
    public function paciente()
    {
        return $this->belongsTo(TablaPaciente::class, 'id_paciente', 'id_paciente');
    }

    public function consulta()
    {
        return $this->belongsTo(TablaConsultum::class, 'id_consulta', 'id_consulta');
    }
    
    
}
