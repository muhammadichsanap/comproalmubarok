<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Alumni
 * @package App\Models
 * @version March 29, 2024, 12:53 pm UTC
 *
 * @property string $nama_alumni
 * @property integer $tahun_lulus
 * @property string $smp
 */
class Alumni extends Model
{


    public $table = 'alumnis';
    



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
