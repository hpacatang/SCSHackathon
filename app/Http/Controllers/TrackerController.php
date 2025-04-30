<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracker;

class TrackerController extends Controller
{
    public function index()
    {
        return response()->json(Tracker::all());
    }

    public function show($id)
    {
        $item = Tracker::find($id);
        if (!$item) {
            return response()->json(['message' => 'Tracker not found'], 404);
        }
        return response()->json($item);
    }
}