<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * Class Ekstrakulikuler
 * @package App\Models
 * @version April 25, 2024, 11:52 am UTC
 *
 * @property string $nama_ekstrakulikuler
 * @property string $keterangan_fasilitas
 * @property string $gambar
 */
class Ekstrakulikuler extends Model
{


    public $table = 'Ekstrakulikuler';
    



    public $fillable = [
        'nama_ekstrakulikuler',
        'keterangan_fasilitas',
        'gambar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_ekstrakulikuler' => 'string',
        'keterangan_fasilitas' => 'string',
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
