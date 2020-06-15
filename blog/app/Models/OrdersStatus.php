<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersStatus extends Model
{
    protected $fillable = ['id', 'name'];

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }
}
