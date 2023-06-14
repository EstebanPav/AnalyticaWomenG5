<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $nombre_contc
 * @property $tel1_contc
 * @property $tel2_contc
 * @property $email1_contc
 * @property $email2_contc
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contacto extends Model
{
    
    static $rules = [
		'nombre_contc' => 'required',
		'tel1_contc' => 'required',
		'tel2_contc' => 'required',
		'email1_contc' => 'required',
		'email2_contc' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_contc','tel1_contc','tel2_contc','email1_contc','email2_contc'];



}
