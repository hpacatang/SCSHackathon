<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        return response()->json(Inventory::all());
    }

    public function show($id)
    {
        $item = Inventory::find($id);
        if (!$item) {
            return response()->json(['message' => 'Inventory not found'], 404);
        }
        return response()->json($item);
    }
}