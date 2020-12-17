<?php


namespace App\Services\Order;


use App\Repositories\Order\OrderRepository;

class OrderService
{

    public $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getAll()
    {
        return $this->orderRepository->getAll();
    }

    public function create(array $data)
    {

    }
}
