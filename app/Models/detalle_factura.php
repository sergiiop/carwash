<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class detalle_factura
 * @package App\Models
 * @version April 30, 2020, 4:51 am UTC
 *
 * @property integer $factura_id
 * @property integer $services_id
 */
class detalle_factura extends Model
{

    public $table = 'detalle_factura';
    



    public $fillable = [
        'factura_id',
        'services_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'factura_id' => 'integer',
        'services_id' => 'integer'
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
        return $this->belongsTo('App\Models\factura','factura_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\services','services_id');
    }

    
}
