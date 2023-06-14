<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cursoscap
 *
 * @property $id
 * @property $cliente_id
 * @property $nombre_cursoscaps
 * @property $descipcion_cursoscaps
 * @property $publicacion_cursoscaps
 * @property $edadmin_cursoscaps
 * @property $edadmax_cursoscaps
 * @property $link_cursoscaps
 * @property $cupos_cursoscaps
 * @property $costo_cursoscaps
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cursoscap extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'nombre_cursoscaps' => 'required',
		'descipcion_cursoscaps' => 'required',
		'publicacion_cursoscaps' => 'required',
		'edadmin_cursoscaps' => 'required',
		'edadmax_cursoscaps' => 'required',
		'link_cursoscaps' => 'required',
		'cupos_cursoscaps' => 'required',
		'costo_cursoscaps' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','nombre_cursoscaps','descipcion_cursoscaps','publicacion_cursoscaps','edadmin_cursoscaps','edadmax_cursoscaps','link_cursoscaps','cupos_cursoscaps','costo_cursoscaps'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_cli', 'cliente_id');
    }
    

}
