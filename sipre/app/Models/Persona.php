<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $nombre
 * @property $correo
 * @property $programa_id
 * @property $rol_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    protected $table = 'personas';

    static $rules = [
        'id' => 'required',
		'nombre' => 'required',
		'correo' => 'required',
		'programa_id' => 'required',
		'rol_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nombre','correo','programa_id','rol_id','estado'];

  /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Models\Programa', 'id', 'programa_id');
    }

    public function rol()
    {
        return $this->hasOne('App\Models\Rol', 'id', 'rol_id');
    }

}
