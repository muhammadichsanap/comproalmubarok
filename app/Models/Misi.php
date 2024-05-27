<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Misi
 * @package App\Models
 * @version May 21, 2024, 12:05 pm WIB
 *
 * @property string $misi
 */
class Misi extends Model
{


    public $table = 'Misi';
    



    public $fillable = [
        'misi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'misi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
