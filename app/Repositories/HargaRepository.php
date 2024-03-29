<?php

namespace App\Repositories;

use App\Models\Harga;
use App\Repositories\BaseRepository;

/**
 * Class HargaRepository
 * @package App\Repositories
 * @version March 29, 2024, 12:46 pm UTC
*/

class HargaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uang_gedung',
        'uang_masuk',
        'spp'
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
        return Harga::class;
    }
}
