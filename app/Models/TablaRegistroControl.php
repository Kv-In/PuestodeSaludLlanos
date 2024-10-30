<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TablaRegistroControl
 *
 * @property $id_control
 * @property $id_paciente
 * @property $id_insumo
 * @property $medicamento
 * @property $cantidad_entregada
 * @property $fecha_consulta
 * @property $created_at
 * @property $updated_at
 *
 * @property TablaInventarioInsumo $tablaInventarioInsumo
 * @property TablaPaciente $tablaPaciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TablaRegistroControl extends Model
{
    protected $table = 'tabla_registro_control'; // Asegúrate de que este sea el nombre correcto en tu base de datos

    protected $perPage = 20;
    protected $primaryKey = 'id_control';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_control', 'id_paciente', 'id_insumo', 'medicamento', 'cantidad_entregada', 'fecha_consulta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tablaInventarioInsumo()
    {
        return $this->belongsTo(\App\Models\TablaInventarioInsumo::class, 'id_insumo', 'id_insumo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tablaPaciente()
    {
        return $this->belongsTo(\App\Models\TablaPaciente::class, 'id_paciente', 'id_paciente');
    }
    
}
