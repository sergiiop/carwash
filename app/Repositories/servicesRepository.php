<?php

namespace App\Repositories;

use App\Models\services;
use App\Repositories\BaseRepository;

/**
 * Class servicesRepository
 * @package App\Repositories
 * @version April 29, 2020, 8:42 pm UTC
*/

class servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'type_services_id',
        'status_id'
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
        return services::class;
    }
}
