<?php


namespace App\Repositories\Store;


use App\Models\Store;

class StoreRepository
{
    public function getAll()
    {
        return Store::all();
    }
}
