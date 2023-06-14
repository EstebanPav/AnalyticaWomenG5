<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudade
 *
 * @property $id
 * @property $provincia_id
 * @property $nombre_ciu
 * @property $created_at
 * @property $updated_at
 *
 * @property Provincia $provincia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ciudade extends Model
{
    
    static $rules = [
		'provincia_id' => 'required',
		'nombre_ciu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['provincia_id','nombre_ciu'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provincia()
    {
        return $this->hasOne('App\Models\Provincia', 'id', 'provincia_id');
    }
    

}
