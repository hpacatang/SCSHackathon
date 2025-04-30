<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
        return response()->json(Warehouse::all());
    }

    public function show($id)
    {
        $item = Warehouse::find($id);
        if (!$item) {
            return response()->json(['message' => 'Warehouse not found'], 404);
        }
        return response()->json($item);
    }
}
