<?php

namespace App\Repositories;

use App\Models\Harga;
use App\Repositories\BaseRepository;

/**
 * Class HargaRepository
 * @package App\Repositories
 * @version April 25, 2024, 11:46 am UTC
*/

class HargaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pengembangan',
        'pemeliharaan_gedung',
        'peningkatan_mutu',
        'kegiatan_belajar',
        'buku_paket',
        'seragam_putra',
        'seragam_putri',
        'spp',
        'total_putra',
        'total_putri'
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
