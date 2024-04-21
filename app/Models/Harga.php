<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * Class Harga
 * @package App\Models
 * @version March 29, 2024, 12:46 pm UTC
 *
 * @property integer $uang_gedung
 * @property integer $uang_masuk
 * @property integer $spp
 */
class Harga extends Model
{


    public $table = 'hargas';
    



    public $fillable = [
        'uang_gedung',
        'uang_masuk',
        'spp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uang_gedung' => 'integer',
        'uang_masuk' => 'integer',
        'spp' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
