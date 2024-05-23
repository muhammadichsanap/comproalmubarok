<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Visi
 * @package App\Models
 * @version May 21, 2024, 12:03 pm WIB
 *
 * @property string $visi
 */
class Visi extends Model
{


    public $table = 'Visi';
    



    public $fillable = [
        'visi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'visi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
