<?php

namespace App\Repositories;

use App\Models\detalle_factura;
use App\Repositories\BaseRepository;

/**
 * Class detalle_facturaRepository
 * @package App\Repositories
 * @version April 29, 2020, 8:54 pm UTC
*/

class detalle_facturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'factura_id',
        'services_id',
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
