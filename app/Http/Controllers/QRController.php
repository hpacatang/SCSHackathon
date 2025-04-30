<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Validator;

class QRController extends Controller
{
    public function processScan(Request $request)
    {
        $request->validate([
            'qr_code' => 'required|string',
        ]);

        $qr = QR::create([
            'code' => $request->qr_code,
            'scanned_at' => now(),
        ]);

        return response()->json([
            'message' => 'QR code processed successfully.',
            'qr' => $qr,
        ]);
    }
}
