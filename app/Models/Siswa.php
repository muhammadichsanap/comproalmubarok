<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Siswa
 * @package App\Models
 * @version April 27, 2024, 7:23 am UTC
 *
 * @property string $rombel
 * @property string $nama
 * @property string $nipd
 * @property string $jk
 * @property string $nisn
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $nik
 * @property string $agama
 * @property string $alamat
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $hp
 * @property string $data_ayah
 * @property string $data_ibu
 * @property string $no_kk
 * @property string $berat_badan
 * @property string $tinggi_badan
 */
class Siswa extends Model
{


    public $table = 'Siswa';
    



    public $fillable = [
        'rombel',
        'nama',
        'nipd',
        'jk',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'agama',
        'alamat',
        'kelurahan',
        'kecamatan',
        'hp',
        'data_ayah',
        'data_ibu',
        'no_kk',
        'berat_badan',
        'tinggi_badan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rombel' => 'string',
        'nama' => 'string',
        'nipd' => 'string',
        'jk' => 'string',
        'nisn' => 'string',
        'tempat_lahir' => 'string',
        'tanggal_lahir' => 'string',
        'nik' => 'string',
        'agama' => 'string',
        'alamat' => 'string',
        'kelurahan' => 'string',
        'kecamatan' => 'string',
        'hp' => 'string',
        'data_ayah' => 'string',
        'data_ibu' => 'string',
        'no_kk' => 'string',
        'berat_badan' => 'string',
        'tinggi_badan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
