<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::create([
            'name' => 'Store #1',
            'additional_info' => 'Additional info about Store #1',
            'status' => 1
        ]);
        Store::create([
            'name' => 'Store #2',
            'additional_info' => 'Additional info about Store #2',
            'status' => 2
        ]);
        Store::create([
            'name' => 'Store #3',
            'additional_info' => 'Additional info about Store #3',
            'status' => 1
        ]);
    }
}
