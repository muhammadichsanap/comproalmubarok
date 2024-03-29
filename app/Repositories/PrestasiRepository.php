<?php

namespace App\Repositories;

use App\Models\Prestasi;
use App\Repositories\BaseRepository;

/**
 * Class PrestasiRepository
 * @package App\Repositories
 * @version March 29, 2024, 1:04 pm UTC
*/

class PrestasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_siswa',
        'prestasi'
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
        return Prestasi::class;
    }
}
