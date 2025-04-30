<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Validator;

class QRController extends Controller
{
    public function scan(Request $request)
    {
        $request->validate([
            'qr_code' => 'required|string',
        ]);

        // Find the inventory item by QR code
        $inventory = Inventory::where('qr_code', $request->qr_code)->first();

        if (!$inventory) {
            return response()->json(['message' => 'Inventory item not found.'], 404);
        }

        // Retrieve the associated shipment
        $shipment = Shipment::with(['tracker', 'timelineEntries', 'alerts', 'weatherRisks', 'port'])
            ->where('inventory_id', $inventory->id)
            ->first();

        if (!$shipment) {
            return response()->json(['message' => 'Shipment not found.'], 404);
        }

        return response()->json([
            'inventory' => $inventory,
            'shipment' => $shipment,
        ]);
    }
}
