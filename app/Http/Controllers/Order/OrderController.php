<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Status;
use App\Models\User;
use App\Services\Order\OrderService;
use App\Services\Store\StoreService;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public $orderService;

    public $storeService;

    public function __construct(
        OrderService $orderService,
        StoreService $storeService
    )
    {
        $this->orderService = $orderService;
        $this->storeService = $storeService;
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
        $orders = $this->orderService->getAll();
        $statuses = Status::all();
        return view('order.index', compact('orders', 'statuses'));
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

    public function create()
    {
        $stores = $this->storeService->getAll();
        return view('order.create', compact('stores'));
    }

    public function createAction(Request $request)
    {
        return $this->orderService->create($request->all());
    }
}
