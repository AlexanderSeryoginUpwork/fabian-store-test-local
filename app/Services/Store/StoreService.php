<?php


namespace App\Services\Store;


use App\Models\Store;
use App\Repositories\Store\StoreRepository;

class StoreService
{
    public $storeRepository;

    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function getAll()
    {
        return $this->storeRepository->getAll();
    }

    public function create(array $data): Store
    {
        return $this->storeRepository->create($data);
    }
}
