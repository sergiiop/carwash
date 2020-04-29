<?php

namespace App\Repositories;

use App\Models\brands;
use App\Repositories\BaseRepository;

/**
 * Class brandsRepository
 * @package App\Repositories
 * @version April 29, 2020, 6:26 pm UTC
*/

class brandsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
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
        return brands::class;
    }
}
