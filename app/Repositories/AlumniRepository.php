<?php

namespace App\Repositories;

use App\Models\Alumni;
use App\Repositories\BaseRepository;

/**
 * Class AlumniRepository
 * @package App\Repositories
 * @version April 25, 2024, 11:47 am UTC
*/

class AlumniRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_alumni',
        'tahun_lulus',
        'smp'
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
        return Alumni::class;
    }
}
