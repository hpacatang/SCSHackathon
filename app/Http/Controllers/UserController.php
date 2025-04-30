<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function show($id)
    {
        $item = User::find($id);
        if (!$item) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($item);
    }
}
