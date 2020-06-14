<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id', 'SKU', "name", 'description', 'small_description', 'price', 'discount', 'quantity', 'thumbnail'    
    ];
}
