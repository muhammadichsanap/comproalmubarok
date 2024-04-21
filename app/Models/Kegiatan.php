<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * Class Kegiatan
 * @package App\Models
 * @version April 19, 2024, 9:01 pm UTC
 *
 * @property string $nama_kegiatan
 * @property string $keterangan
 * @property string $gambar
 */
class Kegiatan extends Model
{


    public $table = 'kegiatans';
    



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
