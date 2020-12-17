<?php


namespace App\Repositories\Store;


use App\Models\Store;

class StoreRepository
{
    public function getAll()
    {
        return Store::with('status')->get();
    }

    public function create(array $data): Store
    {
        return Store::create($data);
    }
}
