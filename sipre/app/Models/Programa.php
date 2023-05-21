<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 *
 * @property $id
 * @property $descripcion
 * @property $facultad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Facultad $facultad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programa extends Model
{
    protected $table = 'programa';
    static $rules = [
		'descripcion' => 'required',
		'facultad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','facultad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facultad()
    {
        return $this->hasOne('App\Models\Facultad', 'id', 'facultad_id');
    }


}
