<?php

namespace App\Repositories;

use App\Models\detalle_factura;
use App\Repositories\BaseRepository;

/**
 * Class detalle_facturaRepository
 * @package App\Repositories
 * @version April 30, 2020, 4:51 am UTC
*/

class detalle_facturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'factura_id',
        'services_id'
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
        return detalle_factura::class;
    }
}
