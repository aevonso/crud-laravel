<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class WarehouseController extends Controller
{
    /**
     * Получить список всех складов
     */
    public function index()
    {
        $warehouses = Warehouse::all();
        return response()->json($warehouses);
    }

    /**
     * Создание нового склада
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $warehouse = Warehouse::create($validated);
        return response()->json($warehouse,201);
    }

    /**
     * Получение инфы о складе
     */
    public function show(Warehouse $warehouse)
    {
        return response()->json($warehouse);
    }

    /**
     * обновить информацию о складе
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
        ]);
        $warehouse->update($validated);
        return response()->json($warehouse,201);
    }

    /**
     * Удаление склада.
     */
    public function destroy(Warehouse $warehouse)
    {
        $warehouse->delete();
        return response()->noContent();
    }
}
