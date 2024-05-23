<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Tentang
 * @package App\Models
 * @version May 21, 2024, 12:05 pm WIB
 *
 * @property string $tentang
 */
class Tentang extends Model
{


    public $table = 'Tentang';
    



    public $fillable = [
        'tentang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tentang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
