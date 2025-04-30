<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;

class ShipmentController extends Controller
{
    public function index()
    {
        return response()->json(Shipment::all());
    }

    public function show($id)
    {
        $item = Shipment::find($id);
        if (!$item) {
            return response()->json(['message' => 'Shipment not found'], 404);
        }
        return response()->json($item);
    }
}
