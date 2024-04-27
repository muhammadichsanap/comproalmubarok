<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * Class Alumni
 * @package App\Models
 * @version April 25, 2024, 11:47 am UTC
 *
 * @property string $nama_alumni
 * @property integer $tahun_lulus
 * @property string $smp
 */
class Alumni extends Model
{


    public $table = 'Alumni';
    



    public $fillable = [
        'nama_alumni',
        'tahun_lulus',
        'smp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_alumni' => 'string',
        'tahun_lulus' => 'integer',
        'smp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
