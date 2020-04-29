<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Status_Person
 * @package App\Models
 * @version April 29, 2020, 6:13 pm UTC
 *
 * @property boolean $Status
 */
class Status_Person extends Model
{

    public $table = 'Status_Person';
    



    public $fillable = [
        'Status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
