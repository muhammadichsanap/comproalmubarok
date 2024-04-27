<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * Class Prestasi
 * @package App\Models
 * @version April 25, 2024, 11:48 am UTC
 *
 * @property string $nama_siswa
 * @property string $prestasi
 * @property string $gambar
 */
class Prestasi extends Model
{


    public $table = 'Prestasi';
    



    public $fillable = [
        'nama_siswa',
        'prestasi',
        'gambar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_siswa' => 'string',
        'prestasi' => 'string',
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
