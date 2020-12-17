<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'store_id' => 1,
            'title' => 'Product #1',
            'description' => 'Description of Product #1',
            'status' => 0
        ]);
        Product::create([
            'store_id' => 2,
            'title' => 'Product #2',
            'description' => 'Description of Product #2',
            'status' => 1
        ]);
        Product::create([
            'store_id' => 3,
            'title' => 'Product #3',
            'description' => 'Description of Product #3',
            'status' => 2
        ]);
    }
}
