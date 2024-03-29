<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Prestasi
 * @package App\Models
 * @version March 29, 2024, 1:04 pm UTC
 *
 * @property string $nama_siswa
 * @property string $prestasi
 */
class Prestasi extends Model
{


    public $table = 'prestasis';
    



    public $fillable = [
        'nama_siswa',
        'prestasi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_siswa' => 'string',
        'prestasi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
