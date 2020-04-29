<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class people
 * @package App\Models
 * @version April 29, 2020, 7:08 pm UTC
 *
 * @property string $name
 * @property string $last_name
 * @property string $Identification
 * @property integer $type_id
 * @property string $date_birth
 * @property string $phone
 * @property string $direccion
 */
class people extends Model
{

    public $table = 'people';
    



    public $fillable = [
        'name',
        'last_name',
        'Identification',
        'type_id',
        'date_birth',
        'phone',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'last_name' => 'string',
        'Identification' => 'string',
        'type_id' => 'integer',
        'date_birth' => 'date',
        'phone' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
