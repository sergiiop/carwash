<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Services_Status
 * @package App\Models
 * @version April 29, 2020, 6:28 pm UTC
 *
 * @property boolean $status
 */
class Services_Status extends Model
{

    public $table = 'Services_Status';
    



    public $fillable = [
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function services()
    {
        return $this->hasMany('App\Models\services');
    }
    
}
