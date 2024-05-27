<?php

namespace App\Repositories;

use App\Models\Misi;
use App\Repositories\BaseRepository;

/**
 * Class MisiRepository
 * @package App\Repositories
 * @version May 21, 2024, 12:05 pm WIB
*/

class MisiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'misi'
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
        return Misi::class;
    }
}
