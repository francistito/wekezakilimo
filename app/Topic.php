<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Topic
 * @package App\Models
 * @version May 9, 2017, 8:52 am UTC
 */
class Topic extends Model
{
    use SoftDeletes;

    public $table = 'topics';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    
}
