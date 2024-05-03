<?php

namespace App\Repositories;

use App\Models\Persyaratan;
use App\Repositories\BaseRepository;

/**
 * Class PersyaratanRepository
 * @package App\Repositories
 * @version May 3, 2024, 9:35 pm WIB
*/

class PersyaratanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'syarat'
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
        return Persyaratan::class;
    }
}
