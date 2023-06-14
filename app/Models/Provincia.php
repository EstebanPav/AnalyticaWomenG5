<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provincia
 *
 * @property $id
 * @property $cliente_id
 * @property $nombre_prov
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade[] $ciudades
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Provincia extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'nombre_prov' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','nombre_prov'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ciudades()
    {
        return $this->hasMany('App\Models\Ciudade', 'provincia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    

}
