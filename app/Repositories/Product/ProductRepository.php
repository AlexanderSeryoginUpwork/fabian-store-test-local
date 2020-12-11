<?php


namespace App\Repositories\Product;


use App\Models\Product;

class ProductRepository
{
    public function getAll()
    {
        return Product::all();
    }
}
