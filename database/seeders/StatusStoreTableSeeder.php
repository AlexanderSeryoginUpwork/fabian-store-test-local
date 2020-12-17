<?php

namespace Database\Seeders;

use App\Models\StatusStore;
use Illuminate\Database\Seeder;

class StatusStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusStore::create([
           'status_id' => 1,
           'store_id' => 1
        ]);
        StatusStore::create([
            'status_id' => 2,
            'store_id' => 2
        ]);
        StatusStore::create([
            'status_id' => 3,
            'store_id' => 3
        ]);
    }
}
