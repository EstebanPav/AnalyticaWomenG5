<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Informacion
 *
 * @property $id
 * @property $red_id
 * @property $cont_id
 * @property $mision_inf
 * @property $vision_inf
 * @property $cultural_inf
 * @property $created_at
 * @property $updated_at
 *
 * @property Contacto $contacto
 * @property Redsocial $redsocial
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Informacion extends Model
{
    
    static $rules = [
		'red_id' => 'required',
		'cont_id' => 'required',
		'mision_inf' => 'required',
		'vision_inf' => 'required',
		'cultural_inf' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['red_id','cont_id','mision_inf','vision_inf','cultural_inf'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contacto()
    {
        return $this->hasOne('App\Models\Contacto', 'id', 'cont_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function redsocial()
    {
        return $this->hasOne('App\Models\Redsocial', 'id', 'red_id');
    }
    

}
