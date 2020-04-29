<?php

namespace App\Repositories;

use App\Models\identification_type;
use App\Repositories\BaseRepository;

/**
 * Class identification_typeRepository
 * @package App\Repositories
 * @version April 29, 2020, 6:20 pm UTC
*/

class identification_typeRepository extends BaseRepository
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
        return identification_type::class;
    }
}
