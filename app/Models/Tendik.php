<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Tendik
 * @package App\Models
 * @version March 29, 2024, 12:35 pm UTC
 *
 * @property string $nama_pendidik
 * @property string $jabatan_pendidik
 */
class Tendik extends Model
{


    public $table = 'tendiks';
    



    public $fillable = [
        'nama_pendidik',
        'jabatan_pendidik'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_pendidik' => 'string',
        'jabatan_pendidik' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
