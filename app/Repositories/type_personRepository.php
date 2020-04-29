<?php

namespace App\Repositories;

use App\Models\type_person;
use App\Repositories\BaseRepository;

/**
 * Class type_personRepository
 * @package App\Repositories
 * @version April 29, 2020, 6:24 pm UTC
*/

class type_personRepository extends BaseRepository
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
        return type_person::class;
    }
}
