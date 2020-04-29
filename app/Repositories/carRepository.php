<?php

namespace App\Repositories;

use App\Models\car;
use App\Repositories\BaseRepository;

/**
 * Class carRepository
 * @package App\Repositories
 * @version April 29, 2020, 7:20 pm UTC
*/

class carRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'placa',
        'modelo',
        'color',
        'brand_id',
        'person_id'
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
        return car::class;
    }
}
