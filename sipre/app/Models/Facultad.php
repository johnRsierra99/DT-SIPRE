<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facultad
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Programa[] $programas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facultad extends Model
{
    protected $table = 'facultad';

    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programas()
    {
        return $this->hasMany('App\Models\Programa', 'facultad_id', 'id');
    }


}
