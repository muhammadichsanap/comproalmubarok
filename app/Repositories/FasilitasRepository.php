<?php

namespace App\Repositories;

use App\Models\Fasilitas;
use App\Repositories\BaseRepository;

/**
 * Class FasilitasRepository
 * @package App\Repositories
 * @version March 29, 2024, 12:29 pm UTC
*/

class FasilitasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_fasilitas',
        'keterangan_fasilitas',
        'jumlah_fasilitas'
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
        return Fasilitas::class;
    }
}
