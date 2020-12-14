<?php


namespace App\Services\Product;


use App\Repositories\Product\ProductRepository;

class ProductService
{
    public $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->getAll();
    }
}
