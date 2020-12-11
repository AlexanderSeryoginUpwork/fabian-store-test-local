<?php


namespace App\Services\Store;


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
}
