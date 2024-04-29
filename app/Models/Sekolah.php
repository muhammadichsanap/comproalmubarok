<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Sekolah
 * @package App\Models
 * @version April 25, 2024, 11:58 am UTC
 *
 * @property string $nama_sekolah
 * @property string $alamat_sekolah
 * @property string $akreditasi
 * @property string $kurikulum
 * @property integer $jumlah_siswa
 * @property string $jam_belajar
 * @property integer $no_wa
 * @property string $email
 * @property string $gambar
 */
class Sekolah extends Model
{


    public $table = 'Sekolah';
    



    public $fillable = [
        'nama_sekolah',
        'alamat_sekolah',
        'akreditasi',
        'kurikulum',
        'jumlah_siswa',
        'jam_belajar',
        'no_wa',
        'email',
        'gambar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_sekolah' => 'string',
        'alamat_sekolah' => 'string',
        'akreditasi' => 'string',
        'kurikulum' => 'string',
        'jumlah_siswa' => 'integer',
        'jam_belajar' => 'string',
        'no_wa' => 'integer',
        'email' => 'string',
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
