<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Redsocial
 *
 * @property $id
 * @property $nombre_redsocials
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Redsocial extends Model
{
    
    static $rules = [
		'nombre_redsocials' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_redsocials'];



}
