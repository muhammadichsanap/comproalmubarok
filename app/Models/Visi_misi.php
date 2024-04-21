<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * Class Visi_misi
 * @package App\Models
 * @version March 29, 2024, 1:11 pm UTC
 *
 * @property string $visi
 * @property string $misi
 */
class Visi_misi extends Model
{


    public $table = 'visi_misis';
    



    public $fillable = [
        'visi',
        'misi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'visi' => 'string',
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
