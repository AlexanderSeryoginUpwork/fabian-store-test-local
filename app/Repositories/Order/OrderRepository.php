<?php


namespace App\Repositories\Order;


use App\Models\Order;

class OrderRepository
{
    public function getAll()
    {
        return Order::with('status')->get();
    }
}
