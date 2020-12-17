<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Store;
use App\Services\Store\StoreService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class StoreController extends Controller
{
    public $service;

    public function __construct(StoreService $service)
    {
        $this->service = $service;
    }

    public function getAll()
    {

//        return DataTables::eloquent(Store::query())->make(true);

//        $stores = $this->service->getAll();
        return view('store.index');
    }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('store.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Store::query())->make(true);
    }

    public function create(Request $request)
    {
//        $statuses =
        return view('store.create');
    }

    public function createAction(Request $request)
    {
        return $this->service->create($request->all());
    }
}
