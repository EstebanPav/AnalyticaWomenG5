<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genero
 *
 * @property $id_gen
 * @property $nombre_gen
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Genero extends Model
{
    
    static $rules = [
		'id_gen' => 'required',
		'nombre_gen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_gen','nombre_gen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'genero_id', 'id_gen');
    }
    

}
