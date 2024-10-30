<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TablaInventarioInsumo
 *
 * @property $id_insumo
 * @property $nombre
 * @property $cantidad_existente
 * @property $cantidad_entregada
 * @property $saldo
 * @property $fecha_vencimiento
 * @property $fecha_recepcion
 * @property $created_at
 * @property $updated_at
 *
 * @property TablaRegistroControl[] $tablaRegistroControls
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TablaInventarioInsumo extends Model
{
    protected $table = 'tabla_inventario_insumo'; // Asegúrate de que este sea el nombre correcto en tu base de datos

    protected $perPage = 20;
    protected $primaryKey = 'id_insumo';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_insumo', 'nombre', 'cantidad_existente', 'cantidad_entregada', 'saldo', 'fecha_vencimiento', 'fecha_recepcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tablaRegistroControls()
    {
        return $this->hasMany(\App\Models\TablaRegistroControl::class, 'id_insumo', 'id_insumo');
    }
    
}
