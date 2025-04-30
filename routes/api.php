<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;  
use App\Http\Controllers\QRController;              

Route::post('/qr', [QRController::class, 'processQR']);
// Route::get('/', function () {
//     return view('welcome');
// });


//shipment id, products, time, origin, destination, status, riskLevel, trackerID, inventoryID