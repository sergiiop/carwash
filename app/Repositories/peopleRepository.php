<?php

namespace App\Repositories;

use App\Models\people;
use App\Repositories\BaseRepository;

/**
 * Class peopleRepository
 * @package App\Repositories
 * @version April 29, 2020, 7:08 pm UTC
*/

class peopleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'last_name',
        'Identification',
        'type_id',
        'date_birth',
        'phone',
        'direccion'
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
        return people::class;
    }
}
