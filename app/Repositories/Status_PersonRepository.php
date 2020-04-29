<?php

namespace App\Repositories;

use App\Models\Status_Person;
use App\Repositories\BaseRepository;

/**
 * Class Status_PersonRepository
 * @package App\Repositories
 * @version April 29, 2020, 6:13 pm UTC
*/

class Status_PersonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Status'
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
        return Status_Person::class;
    }
}
