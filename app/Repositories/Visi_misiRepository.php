<?php

namespace App\Repositories;

use App\Models\Visi_misi;
use App\Repositories\BaseRepository;

/**
 * Class Visi_misiRepository
 * @package App\Repositories
 * @version March 29, 2024, 1:11 pm UTC
*/

class Visi_misiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'visi',
        'misi'
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
        return Visi_misi::class;
    }
}
