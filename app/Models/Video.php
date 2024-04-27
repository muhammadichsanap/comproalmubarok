<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * Class Video
 * @package App\Models
 * @version April 25, 2024, 11:49 am UTC
 *
 * @property string $link_url
 * @property string $judul_video
 */
class Video extends Model
{


    public $table = 'Video';
    



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
