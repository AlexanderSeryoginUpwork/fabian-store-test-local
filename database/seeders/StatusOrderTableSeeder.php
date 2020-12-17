<?php

namespace Database\Seeders;

use App\Models\StatusOrder;
use Illuminate\Database\Seeder;

class StatusOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusOrder::create([
            'status_id' => 1,
            'order_id' => 1
        ]);
        StatusOrder::create([
            'status_id' => 2,
            'order_id' => 2
        ]);
        StatusOrder::create([
            'status_id' => 3,
            'order_id' => 3
        ]);
    }
}
