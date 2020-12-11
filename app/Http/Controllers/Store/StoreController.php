<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Services\Store\StoreService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;

class StoreController extends Controller
{
    public $service;

    public function __construct(StoreService $service)
    {
        $this->service = $service;
    }

    public function getAll()
    {
        $stores = $this->service->getAll();
        return view('store.index', [
            'stores' => $stores
        ]);
    }
}
