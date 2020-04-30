<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Invoice_Status
 * @package App\Models
 * @version April 29, 2020, 6:43 pm UTC
 *
 * @property boolean $Status
 */
class Invoice_Status extends Model
{

    public $table = 'Invoice_Status';
    



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

    public function factura()
    {
        return $this->hasMany('App\Models\factura');
    }

    
}
