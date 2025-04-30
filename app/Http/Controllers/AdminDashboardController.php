<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\TimelineEntry;
use App\Models\Inventory;
use App\Models\Tracker;
use App\Models\Warehouse;
use App\Models\Port;
use App\Models\Alert;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'shipments' => Shipment::with(['inventory', 'tracker'])->get(),
            'timelineEntries' => TimelineEntry::with('shipment')->latest()->get(),
            'inventory' => Inventory::with('warehouse')->get(),
            'trackers' => Tracker::all(),
            'warehouses' => Warehouse::all(),
            'ports' => Port::all(),
            'alerts' => Alert::with('shipment')->latest()->get(),
            'users' => User::all()
        ]);
    }
}
