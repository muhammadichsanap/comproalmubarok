<?php

namespace App\Repositories;

use App\Models\Tendik;
use App\Repositories\BaseRepository;

/**
 * Class TendikRepository
 * @package App\Repositories
 * @version April 25, 2024, 11:50 am UTC
*/

class TendikRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_pendidik',
        'jabatan_pendidik',
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
        return Tendik::class;
    }
}
