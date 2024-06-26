<?php

namespace App\Repositories;

use App\Models\Siswa;
use App\Repositories\BaseRepository;

/**
 * Class SiswaRepository
 * @package App\Repositories
 * @version April 27, 2024, 7:23 am UTC
*/

class SiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rombel',
        'nama',
        'nipd',
        'jk',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'agama',
        'alamat',
        'kelurahan',
        'kecamatan',
        'hp',
        'data_ayah',
        'data_ibu',
        'no_kk',
        'berat_badan',
        'tinggi_badan'
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
        return Siswa::class;
    }
}
