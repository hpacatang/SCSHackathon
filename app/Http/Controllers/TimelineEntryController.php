<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimelineEntry;

class TimelineEntryController extends Controller
{
    public function index()
    {
        return response()->json(TimelineEntry::all());
    }

    public function byShipment($shipmentId)
    {
        $entries = TimelineEntry::where('shipment_id', $shipmentId)->get();
        return response()->json($entries);
    }
}