<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleo
 *
 * @property $id
 * @property $cliente_id
 * @property $nombre_emp
 * @property $descripcion_emp
 * @property $modalidad_emp
 * @property $horario_emp
 * @property $fechapub_emp
 * @property $experiencia_emp
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleo extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'nombre_emp' => 'required',
		'descripcion_emp' => 'required',
		'modalidad_emp' => 'required',
		'horario_emp' => 'required',
		'fechapub_emp' => 'required',
		'experiencia_emp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','nombre_emp','descripcion_emp','modalidad_emp','horario_emp','fechapub_emp','experiencia_emp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_cli', 'cliente_id');
    }
    

}
