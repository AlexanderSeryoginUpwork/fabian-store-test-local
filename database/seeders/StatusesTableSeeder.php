<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
           'type' => 1,
           'title' => 'Pending',
           'description' => 'Description of Status #1'
        ]);
        Status::create([
            'type' => 2,
            'title' => 'Shipped',
            'description' => 'Description of Status #1'
        ]);
        Status::create([
            'type' => 2,
            'title' => 'Completed',
            'description' => 'Description of Status #1'
        ]);
    }
}
