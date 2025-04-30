<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Shipment, Alert, TimelineEntry, Tracker, Warehouse, Inventory, Port, User};

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'shipments' => Shipment::with(['inventory', 'tracker'])->get(),
            'alerts' => Alert::with('shipment')->get(),
            'timeline' => TimelineEntry::with('shipment')->get(),
            'trackers' => Tracker::all(),
            'warehouses' => Warehouse::with('inventory')->get(),
            'inventory' => Inventory::with('warehouse')->get(),
            'ports' => Port::all(),
            'users' => User::all()
        ]);
    }
}
