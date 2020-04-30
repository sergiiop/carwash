<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class identification_type
 * @package App\Models
 * @version April 29, 2020, 6:20 pm UTC
 *
 * @property string $description
 */
class identification_type extends Model
{

    public $table = 'identification_type';
    



    public $fillable = [
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function people()
    {
        return $this->hasMany('App\Models\people');
    }

    
}
