<?php

namespace App\Repositories;

use App\Models\Tendik;
use App\Repositories\BaseRepository;

/**
 * Class TendikRepository
 * @package App\Repositories
 * @version March 29, 2024, 12:35 pm UTC
*/

class TendikRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_pendidik',
        'jabatan_pendidik'
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
