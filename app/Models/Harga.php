<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Harga
 * @package App\Models
 * @version April 25, 2024, 11:46 am UTC
 *
 * @property integer $pengembangan
 * @property integer $pemeliharaan_gedung
 * @property integer $peningkatan_mutu
 * @property integer $kegiatan_belajar
 * @property integer $buku_paket
 * @property integer $seragam_putra
 * @property integer $seragam_putri
 * @property integer $spp
 * @property integer $total_putra
 * @property integer $total_putri
 */
class Harga extends Model
{


    public $table = 'Harga';
    



    public $fillable = [
        'pengembangan',
        'pemeliharaan_gedung',
        'peningkatan_mutu',
        'kegiatan_belajar',
        'buku_paket',
        'seragam_putra',
        'seragam_putri',
        'spp',
        'total_putra',
        'total_putri'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pengembangan' => 'integer',
        'pemeliharaan_gedung' => 'integer',
        'peningkatan_mutu' => 'integer',
        'kegiatan_belajar' => 'integer',
        'buku_paket' => 'integer',
        'seragam_putra' => 'integer',
        'seragam_putri' => 'integer',
        'spp' => 'integer',
        'total_putra' => 'integer',
        'total_putri' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
