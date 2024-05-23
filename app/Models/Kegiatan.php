<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Kegiatan
 * @package App\Models
 * @version May 21, 2024, 1:40 pm WIB
 *
 * @property string $nama_kegiatan
 * @property string $keterangan
 * @property string $link_url
 * @property string $gambar
 */
class Kegiatan extends Model
{


    public $table = 'Kegiatan';
    



    public $fillable = [
        'nama_kegiatan',
        'keterangan',
        'link_url',
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
        'link_url' => 'string',
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
