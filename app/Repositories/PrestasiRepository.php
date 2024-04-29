<?php

namespace App\Repositories;

use App\Models\Prestasi;
use App\Repositories\BaseRepository;

/**
 * Class PrestasiRepository
 * @package App\Repositories
 * @version April 25, 2024, 11:48 am UTC
*/

class PrestasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_siswa',
        'prestasi',
        'gambar'
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
