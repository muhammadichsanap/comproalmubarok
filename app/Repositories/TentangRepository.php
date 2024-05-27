<?php

namespace App\Repositories;

use App\Models\Tentang;
use App\Repositories\BaseRepository;

/**
 * Class TentangRepository
 * @package App\Repositories
 * @version May 21, 2024, 12:05 pm WIB
*/

class TentangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tentang'
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
        return Tentang::class;
    }
}
