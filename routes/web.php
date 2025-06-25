<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('warehouses')->group(function() {
    Route::get('/', [WarehouseController::class, 'index']);      // GET /api/warehouses
    Route::post('/', [WarehouseController::class, 'store']);     // POST /api/warehouses
    Route::get('/{id}', [WarehouseController::class, 'show']);   // GET /api/warehouses/1
    Route::put('/{id}', [WarehouseController::class, 'update']); // PUT /api/warehouses/1
    Route::delete('/{id}', [WarehouseController::class, 'destroy']); // DELETE /api/warehouses/1
});
