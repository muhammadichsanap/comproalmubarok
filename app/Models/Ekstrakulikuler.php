<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Ekstrakulikuler
 * @package App\Models
 * @version March 29, 2024, 11:29 am UTC
 *
 * @property string $nama_ekstrakulikuler
 * @property string $keterangan_ekstrakulikuler
 */
class Ekstrakulikuler extends Model
{


    public $table = 'ekstrakulikulers';
    



    public $fillable = [
        'nama_ekstrakulikuler',
        'keterangan_ekstrakulikuler'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_ekstrakulikuler' => 'string',
        'keterangan_ekstrakulikuler' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
