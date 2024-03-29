<?php

namespace App\Repositories;

use App\Models\Sekolah;
use App\Repositories\BaseRepository;

/**
 * Class SekolahRepository
 * @package App\Repositories
 * @version March 29, 2024, 11:19 am UTC
*/

class SekolahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_sekolah',
        'alamat_sekolah',
        'akreditasi',
        'kurikulum',
        'jumlah_siswa',
        'jam_belajar',
        'no_wa',
        'email'
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
        return Sekolah::class;
    }
}
