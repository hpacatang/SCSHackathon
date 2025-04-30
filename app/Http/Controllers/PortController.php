<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Port;

class PortController extends Controller
{
    public function index()
    {
        return response()->json(Port::all());
    }

    public function show($id)
    {
        $item = Port::find($id);
        if (!$item) {
            return response()->json(['message' => 'Port not found'], 404);
        }
        return response()->json($item);
    }
}
