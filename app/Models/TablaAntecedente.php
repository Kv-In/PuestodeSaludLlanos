<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TablaAntecedente
 *
 * @property $id_antecedente
 * @property $id_paciente
 * @property $medicos
 * @property $quirurgicos
 * @property $traumaticos
 * @property $alergicos
 * @property $familiares
 * @property $created_at
 * @property $updated_at
 *
 * @property TablaPaciente $tablaPaciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TablaAntecedente extends Model
{
    
    protected $table = 'tabla_antecedente'; // Asegúrate de que este sea el nombre correcto en tu base de datos

    protected $perPage = 20;
    protected $primaryKey = 'id_antecedente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_antecedente', 'id_paciente', 'medicos', 'quirurgicos', 'traumaticos', 'alergicos', 'familiares'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tablaPaciente()
    {
        return $this->belongsTo(\App\Models\TablaPaciente::class, 'id_paciente', 'id_paciente');
    }
    
}
