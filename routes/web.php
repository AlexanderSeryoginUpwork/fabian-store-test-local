<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])
    ->middleware(['auth'])
    ->name('index');

Route::get('/dashboard', [\App\Http\Controllers\IndexController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::middleware(['auth'])->group(function (){
    Route::prefix('dashboard')
            ->group(function (){
                Route::get('datatables.data', [\App\Http\Controllers\DatatablesController::class, 'anyData'])
                    ->name('datatables.data');
                Route::get('datatables', [\App\Http\Controllers\DatatablesController::class, 'getIndex'])
                    ->name('datatables');

                Route::get('stores.data', [\App\Http\Controllers\Store\StoreController::class, 'anyData'])
                    ->name('datatables.store.data')
                    ->middleware('role:admin');

                Route::get('stores', [\App\Http\Controllers\Store\StoreController::class, 'getIndex'])
                    ->name('stores.getIndex')
                    ->middleware('role:admin');

                Route::get('orders.data', [\App\Http\Controllers\Order\OrderController::class, 'anyData'])
                    ->name('datatables.order.data');
                Route::get('orders', [\App\Http\Controllers\Order\OrderController::class, 'getIndex'])
                    ->name('orders.getIndex')
                    ->middleware('role:admin|user');


                Route::get('store/create',[\App\Http\Controllers\Store\StoreController::class, 'create'])
                    ->middleware('role:admin')
                    ->name('store.create.form');
                Route::post('store/create', [\App\Http\Controllers\Store\StoreController::class, 'createAction'])
                    ->middleware('role:admin')
                    ->name('store.create.action');
            });
    Route::prefix('dashboard')
        ->group(function (){
            Route::get('/order/create',[\App\Http\Controllers\Order\OrderController::class, 'create'])
                ->name('order.create.form');
//                ->middleware('can:manage as admin')
//                ->middleware('can:manage as user');
            Route::post('/order/create', [\App\Http\Controllers\Order\OrderController::class, 'createAction'])
                ->name('order.create.action')
                ->middleware('can:manage as admin')
                ->middleware('can:manage as user');
        });

});

/*Route::resource('datatables', 'DataTables\DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);*/



require __DIR__.'/auth.php';
