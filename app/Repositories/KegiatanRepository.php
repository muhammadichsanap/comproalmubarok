<?php

namespace App\Repositories;

use App\Models\Kegiatan;
use App\Repositories\BaseRepository;

/**
 * Class KegiatanRepository
 * @package App\Repositories
 * @version May 21, 2024, 1:40 pm WIB
*/

class KegiatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_kegiatan',
        'keterangan',
        'link_url',
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
