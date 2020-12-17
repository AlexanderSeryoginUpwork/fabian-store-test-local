<?php

namespace Database\Seeders;

use App\Models\OrderStatuses;
use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderStatuses::create([
            'name' => 'Pending',
            'value' => 0,
            'description' => 'When Pending'
        ]);

        OrderStatuses::create([
            'name' => 'Awaiting',
            'value' => 0,
            'description' => 'When Awaiting'
        ]);

        OrderStatuses::create([
            'name' => 'Shipped',
            'value' => 0,
            'description' => 'When Shipped'
        ]);

        OrderStatuses::create([
            'name' => 'Completed',
            'value' => 0,
            'description' => 'When Completed'
        ]);
    }
}
