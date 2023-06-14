<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $cliente_id
 * @property $nombre_serv
 * @property $descripcion_serv
 * @property $precio_serv
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'nombre_serv' => 'required',
		'descripcion_serv' => 'required',
		'precio_serv' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','nombre_serv','descripcion_serv','precio_serv'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_cli', 'cliente_id');
    }
    

}
