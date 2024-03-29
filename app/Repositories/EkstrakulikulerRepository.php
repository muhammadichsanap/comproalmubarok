<?php

namespace App\Repositories;

use App\Models\Ekstrakulikuler;
use App\Repositories\BaseRepository;

/**
 * Class EkstrakulikulerRepository
 * @package App\Repositories
 * @version March 29, 2024, 11:29 am UTC
*/

class EkstrakulikulerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_ekstrakulikuler',
        'keterangan_ekstrakulikuler'
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
        return Ekstrakulikuler::class;
    }
}
