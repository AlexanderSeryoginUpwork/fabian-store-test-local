<?php


namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Store;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class DatatablesController
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
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
