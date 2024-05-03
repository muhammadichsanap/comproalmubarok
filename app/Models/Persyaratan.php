<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Persyaratan
 * @package App\Models
 * @version May 3, 2024, 9:35 pm WIB
 *
 * @property string $syarat
 */
class Persyaratan extends Model
{


    public $table = 'Persyaratan';
    



    public $fillable = [
        'syarat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'syarat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
