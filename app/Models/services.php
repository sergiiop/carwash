<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class services
 * @package App\Models
 * @version April 29, 2020, 8:41 pm UTC
 *
 * @property string $description
 * @property integer $type_services_id
 * @property integer $status_id
 */
class services extends Model
{

    public $table = 'services';
    



    public $fillable = [
        'description',
        'type_services_id',
        'status_id',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'type_services_id' => 'integer',
        'status_id' => 'integer',
        'price' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function tiposervice()
    {
        return $this->belongsTo('App\Models\type_services','type_services_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Services_Status','status_id');
    }
    
}
