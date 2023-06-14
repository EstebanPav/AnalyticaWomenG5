<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $nombre_pag
 * @property $metodo_pag
 * @property $fecha_pag
 * @property $monto_pag
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'nombre_pag' => 'required',
		'metodo_pag' => 'required',
		'fecha_pag' => 'required',
		'monto_pag' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_pag','metodo_pag','fecha_pag','monto_pag'];



}
