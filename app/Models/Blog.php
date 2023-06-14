<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 *
 * @property $id
 * @property $comentario_id
 * @property $titulo_blog
 * @property $valoracion_blog
 * @property $created_at
 * @property $updated_at
 *
 * @property Comentario $comentario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Blog extends Model
{
    
    static $rules = [
		'comentario_id' => 'required',
		'titulo_blog' => 'required',
		'valoracion_blog' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comentario_id','titulo_blog','valoracion_blog'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comentario()
    {
        return $this->hasOne('App\Models\Comentario', 'id', 'comentario_id');
    }
    

}
