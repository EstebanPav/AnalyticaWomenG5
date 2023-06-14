<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $comentario_id
 * @property $blog_id
 * @property $nombre_cat
 * @property $created_at
 * @property $updated_at
 *
 * @property Blog $blog
 * @property Comentario $comentario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    
    static $rules = [
		'comentario_id' => 'required',
		'blog_id' => 'required',
		'nombre_cat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comentario_id','blog_id','nombre_cat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function blog()
    {
        return $this->hasOne('App\Models\Blog', 'id', 'blog_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comentario()
    {
        return $this->hasOne('App\Models\Comentario', 'id', 'comentario_id');
    }
    

}
