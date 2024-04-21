<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Program
 * @package App\Models
 * @version March 29, 2024, 12:37 pm UTC
 *
 * @property string $nama_program
 */
class Program extends Model
{


    public $table = 'programs';
    



    public $fillable = [
        'nama_program'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_program' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
