<?php

namespace App\Repositories;

use App\Models\Program;
use App\Repositories\BaseRepository;

/**
 * Class ProgramRepository
 * @package App\Repositories
 * @version April 25, 2024, 11:53 am UTC
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
