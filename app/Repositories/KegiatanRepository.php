<?php

namespace App\Repositories;

use App\Models\Kegiatan;
use App\Repositories\BaseRepository;

/**
 * Class KegiatanRepository
 * @package App\Repositories
 * @version April 25, 2024, 11:53 am UTC
*/

class KegiatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kegiatan',
        'keterangan',
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
        return Kegiatan::class;
    }
}