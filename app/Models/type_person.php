<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class type_person
 * @package App\Models
 * @version April 29, 2020, 6:24 pm UTC
 *
 * @property string $description
 */
class type_person extends Model
{

    public $table = 'type_person';
    



    public $fillable = [
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
