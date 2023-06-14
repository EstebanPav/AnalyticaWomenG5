<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $genero_id
 * @property $nombre_cli
 * @property $fecha_nac_cli
 * @property $telefono1_cli
 * @property $telefono2_cli
 * @property $email_cli
 * @property $titulo_cli
 * @property $rol_cli
 * @property $experiencia_cli
 * @property $created_at
 * @property $updated_at
 *
 * @property Cursoscap[] $cursoscaps
 * @property Empleo[] $empleos
 * @property Genero $genero
 * @property Provincia[] $provincias
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'genero_id' => 'required',
		'nombre_cli' => 'required',
		'fecha_nac_cli' => 'required',
		'telefono1_cli' => 'required',
		'telefono2_cli' => 'required',
		'email_cli' => 'required',
		'titulo_cli' => 'required',
		'rol_cli' => 'required',
		'experiencia_cli' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['genero_id','nombre_cli','fecha_nac_cli','telefono1_cli','telefono2_cli','email_cli','titulo_cli','rol_cli','experiencia_cli'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursoscaps()
    {
        return $this->hasMany('App\Models\Cursoscap', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleos()
    {
        return $this->hasMany('App\Models\Empleo', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provincias()
    {
        return $this->hasMany('App\Models\Provincia', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'cliente_id', 'id');
    }
    

}
