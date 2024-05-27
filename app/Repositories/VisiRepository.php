<?php

namespace App\Repositories;

use App\Models\Visi;
use App\Repositories\BaseRepository;

/**
 * Class VisiRepository
 * @package App\Repositories
 * @version May 21, 2024, 12:03 pm WIB
*/

class VisiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'visi'
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
        return Visi::class;
    }
}
