<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Tendik
 * @package App\Models
 * @version April 25, 2024, 11:50 am UTC
 *
 * @property string $nama_pendidik
 * @property string $jabatan_pendidik
 * @property string $gambar
 */
class Tendik extends Model
{


    public $table = 'Tendik';
    



    public $fillable = [
        'nama_pendidik',
        'jabatan_pendidik',
        'gambar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_pendidik' => 'string',
        'jabatan_pendidik' => 'string',
        'gambar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
