<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TablaPaciente
 *
 * @property $id_paciente
 * @property $nombre
 * @property $edad
 * @property $sexo
 * @property $estado_civil
 * @property $etnia
 * @property $puesto_servicio
 * @property $region_presupuestario
 * @property $unidad_administrativa
 * @property $dpi_cui
 * @property $telefono
 * @property $emergencia_nombre
 * @property $emergencia_telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property TablaAntecedente[] $tablaAntecedentes
 * @property TablaConsultum[] $tablaConsultas
 * @property TablaRecetum[] $tablaRecetas
 * @property TablaRecetum[] $tablaRecetas
 * @property TablaRegistroControl[] $tablaRegistroControls
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TablaPaciente extends Model
{
    protected $table = 'tabla_paciente'; // Asegúrate de que este sea el nombre correcto en tu base de datos

    protected $perPage = 20;
    protected $primaryKey = 'id_paciente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'edad', 'sexo', 'estado_civil', 'etnia', 'puesto_servicio', 'region_presupuestario', 'unidad_administrativa', 'dpi_cui', 'telefono', 'emergencia_nombre', 'emergencia_telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tablaAntecedentes()
    {
        return $this->hasMany(\App\Models\TablaAntecedente::class, 'id_paciente', 'id_paciente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tablaConsultas()
    {
        return $this->hasMany(\App\Models\TablaConsultum::class, 'id_paciente', 'id_paciente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tablaRecetas()
    {
        return $this->hasMany(\App\Models\TablaRecetum::class, 'dpi_cui', 'dpi_paciente');
    }
    
  
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tablaRegistroControls()
    {
        return $this->hasMany(\App\Models\TablaRegistroControl::class, 'id_paciente', 'id_paciente');
    }
    
}
