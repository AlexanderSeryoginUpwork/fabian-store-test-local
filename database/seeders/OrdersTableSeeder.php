<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'store_id' => 1,
            'user_id' => 1,
            'status' => 1,
            'additional_info' => 'I live in Ukraine, Kiev, Street #1 / 123'
        ]);
        Order::create([
            'store_id' => 2,
            'user_id' => 2,
            'status' => 2,
            'additional_info' => 'I live in USA, New York, Street #2 / 321'
        ]);
        Order::create([
            'store_id' => 3,
            'user_id' => 1,
            'status' => 3,
            'additional_info' => 'I live in Australia, Sidney, Street #3 / 1024'
        ]);
    }
}
