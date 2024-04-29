<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Visi_misi
 * @package App\Models
 * @version April 25, 2024, 1:22 pm UTC
 *
 * @property string $visi
 * @property string $misi
 * @property string $tentang
 */
class Visi_misi extends Model
{


    public $table = 'Visi_misi';
    



    public $fillable = [
        'visi',
        'misi',
        'tentang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'visi' => 'string',
        'misi' => 'string',
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
