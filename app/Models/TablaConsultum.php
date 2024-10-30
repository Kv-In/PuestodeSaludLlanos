<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TablaConsultum
 *
 * @property $id_consulta
 * @property $id_paciente
 * @property $fecha
 * @property $motivo_consulta
 * @property $presion_arterial
 * @property $peso
 * @property $diagnostico
 * @property $tratamiento
 * @property $firma_medica
 * @property $created_at
 * @property $updated_at
 *
 * @property TablaPaciente $tablaPaciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TablaConsultum extends Model
{
    protected $table = 'tabla_consulta'; // Asegúrate de que este sea el nombre correcto en tu base de datos

    protected $perPage = 20;
    protected $primaryKey = 'id_consulta';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_paciente', 'fecha', 'motivo_consulta', 'presion_arterial', 'peso', 'diagnostico', 'tratamiento', 'firma_medica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tablaPaciente()
    {
        return $this->belongsTo(\App\Models\TablaPaciente::class, 'id_paciente', 'id_paciente');
    }

    public function paciente()
    {
        return $this->belongsTo(TablaPaciente::class, 'id_paciente');
    }
    
    // En el modelo TablaConsultaFinal.php
public function consulta()
{
    return $this->belongsTo(TablaConsultum::class, 'id_consulta');
}

// En el modelo TablaConsultum
public function consultaFinal()
{
    return $this->hasOne(ConsultaFinal::class, 'id_consulta', 'id_consulta');
}



}
