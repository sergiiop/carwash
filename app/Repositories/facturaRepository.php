<?php

namespace App\Repositories;

use App\Models\factura;
use App\Repositories\BaseRepository;

/**
 * Class facturaRepository
 * @package App\Repositories
 * @version April 29, 2020, 8:09 pm UTC
*/

class facturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'person_id',
        'car_id',
        'status_id',
        'observation'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return factura::class;
    }
}
