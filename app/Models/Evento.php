<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $nombre_event
 * @property $descripcion_event
 * @property $fecha_event
 * @property $horas_event
 * @property $ubicacion_event
 * @property $observacion_event
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    static $rules = [
		'nombre_event' => 'required',
		'descripcion_event' => 'required',
		'fecha_event' => 'required',
		'horas_event' => 'required',
		'ubicacion_event' => 'required',
		'observacion_event' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_event','descripcion_event','fecha_event','horas_event','ubicacion_event','observacion_event'];



}
