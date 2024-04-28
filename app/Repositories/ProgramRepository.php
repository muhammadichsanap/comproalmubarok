<?php

namespace App\Repositories;

use App\Models\Program;
use App\Repositories\BaseRepository;

/**
 * Class ProgramRepository
 * @package App\Repositories
 * @version April 28, 2024, 4:00 pm UTC
*/

class ProgramRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_program'
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
        return Program::class;
    }
}
