<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class factura
 * @package App\Models
 * @version April 29, 2020, 8:09 pm UTC
 *
 * @property integer $person_id
 * @property integer $car_id
 * @property integer $status_id
 * @property string $observation
 */
class factura extends Model
{

    public $table = 'factura';
    



    public $fillable = [
        'person_id',
        'car_id',
        'status_id',
        'observation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'person_id' => 'integer',
        'car_id' => 'integer',
        'status_id' => 'integer',
        'observation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function person()
    {
        return $this->belongsTo('App\Models\people','person_id');
    }
    public function car()
    {
        return $this->belongsTo('App\Models\car','car_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Invoice_Status','status_id');
    }
    
}
