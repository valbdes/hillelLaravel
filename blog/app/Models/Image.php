<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'id', 'path', "imageble_id", 'imageble_type'
    ];
    protected $hidden = ['imageble_id', 'imageble_type'];
}
