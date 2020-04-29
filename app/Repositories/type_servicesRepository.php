<?php

namespace App\Repositories;

use App\Models\type_services;
use App\Repositories\BaseRepository;

/**
 * Class type_servicesRepository
 * @package App\Repositories
 * @version April 29, 2020, 6:29 pm UTC
*/

class type_servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description'
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
        return type_services::class;
    }
}
