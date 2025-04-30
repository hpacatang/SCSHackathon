<?php

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;
             

Route::post('/qr/scan', [QRController::class, 'scan']);
// Route::get('/', function () {
//     return view('welcome');
// });


//shipment id, products, time, origin, destination, status, riskLevel, trackerID, inventoryID