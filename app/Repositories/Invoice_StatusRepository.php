<?php

namespace App\Repositories;

use App\Models\Invoice_Status;
use App\Repositories\BaseRepository;

/**
 * Class Invoice_StatusRepository
 * @package App\Repositories
 * @version April 29, 2020, 6:43 pm UTC
*/

class Invoice_StatusRepository extends BaseRepository
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
        return Invoice_Status::class;
    }
}
