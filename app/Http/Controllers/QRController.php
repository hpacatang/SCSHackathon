<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Validator;

class QRController extends Controller
{
    public function processQR(Request $request){
        $validator = Validator::make($request->all(), [
            'qr_code' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => 'Invalid QR code input.'], 422);
        }

        $inventory = Inventory::where('qr_code', $request->qr_code)->first();

        if (!$inventory) {
            return response()->json(['status' => 'error', 'message' => 'Inventory item not found.'], 404);
        }

        // Update last scanned timestamp
        $inventory->last_scanned = now();
        $inventory->save();

        return response()->json(['status' => 'success', 'data' => $inventory], 200);
    }
}
