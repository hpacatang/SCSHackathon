<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alert;

class AlertController extends Controller
{
    public function index()
    {
        return response()->json(Alert::all());
    }

    public function byShipment($shipmentId)
    {
        $alerts = Alert::where('shipment_id', $shipmentId)->get();
        return response()->json($alerts);
    }
}
