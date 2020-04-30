<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class car
 * @package App\Models
 * @version April 29, 2020, 7:20 pm UTC
 *
 * @property string $placa
 * @property string $modelo
 * @property string $color
 * @property integer $brand_id
 * @property integer $person_id
 */
class car extends Model
{

    public $table = 'car';
    



    public $fillable = [
        'placa',
        'modelo',
        'color',
        'brand_id',
        'person_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'placa' => 'string',
        'modelo' => 'string',
        'color' => 'string',
        'brand_id' => 'integer',
        'person_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function marca()
    {
        return $this->belongsTo('App\Models\brands','brand_id');
    }

    public function persona()
    {
        return $this->belongsTo('App\Models\people','person_id');
    }
}
