<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Kegiatan
 * @package App\Models
 * @version April 25, 2024, 11:53 am UTC
 *
 * @property string $nama_kegiatan
 * @property string $keterangan
 * @property string $gambar
 */
class Kegiatan extends Model
{


    public $table = 'Kegiatan';
    



    public $fillable = [
        'nama_kegiatan',
        'keterangan',
        'gambar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_kegiatan' => 'string',
        'keterangan' => 'string',
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
