<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Video
 * @package App\Models
 * @version March 29, 2024, 1:12 pm UTC
 *
 * @property string $link_url
 * @property string $judul_video
 */
class Video extends Model
{


    public $table = 'videos';
    



    public $fillable = [
        'link_url',
        'judul_video'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'link_url' => 'string',
        'judul_video' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
