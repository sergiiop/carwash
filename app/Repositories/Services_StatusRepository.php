<?php

namespace App\Repositories;

use App\Models\Services_Status;
use App\Repositories\BaseRepository;

/**
 * Class Services_StatusRepository
 * @package App\Repositories
 * @version April 29, 2020, 6:28 pm UTC
*/

class Services_StatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status'
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
        return Services_Status::class;
    }
}
