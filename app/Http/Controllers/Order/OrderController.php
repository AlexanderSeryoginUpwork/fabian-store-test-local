<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Services\Order\OrderService;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function getAll()
    {
        $orders = $this->orderService->getAll();
//        return Datatables::eloquent(User::query())->make(true);
        return view('order.index', compact('orders'));
    }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('order.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Order::query())->make(true);
    }
}
