<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Fasilitas
 * @package App\Models
 * @version March 29, 2024, 12:29 pm UTC
 *
 * @property string $nama_fasilitas
 * @property string $keterangan_fasilitas
 * @property integer $jumlah_fasilitas
 */
class Fasilitas extends Model
{


    public $table = 'fasilitas';
    



    public $fillable = [
        'nama_fasilitas',
        'keterangan_fasilitas',
        'jumlah_fasilitas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_fasilitas' => 'string',
        'keterangan_fasilitas' => 'string',
        'jumlah_fasilitas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
