<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class brands
 * @package App\Models
 * @version April 29, 2020, 6:26 pm UTC
 *
 * @property string $descripcion
 */
class brands extends Model
{

    public $table = 'brands';
    



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
