<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function store()
    {
        return $this->hasMany(Store::class, 'store_id ', 'id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }
}
