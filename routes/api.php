<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Маршруты API автоматически получают префикс /api
| и middleware группу 'api'
*/

// Тестовый маршрут для проверки работы API
Route::get('/test', function() {
    return response()->json(['status' => 'API работает!']);
});

// Маршруты для работы со складами (CRUD)


// Альтернативный вариант (более лаконичный)
