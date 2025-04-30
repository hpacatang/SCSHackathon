<?php

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TrackerController;
use App\Http\Controllers\TimelineEntryController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QRController;

// === Shipments ===
Route::get('/shipments', [ShipmentController::class, 'index']); // List all
Route::get('/shipments/{id}', [ShipmentController::class, 'show']); // Show one

// === Warehouses ===
Route::get('/warehouses', [WarehouseController::class, 'index']);
Route::get('/warehouses/{id}', [WarehouseController::class, 'show']);

// === Inventory ===
Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/inventory/{id}', [InventoryController::class, 'show']);

// === Trackers ===
Route::get('/trackers', [TrackerController::class, 'index']);
Route::get('/trackers/{id}', [TrackerController::class, 'show']);

// === Timeline Entries (updates) ===
Route::get('/timeline', [TimelineEntryController::class, 'index']);
Route::get('/timeline/shipment/{shipmentId}', [TimelineEntryController::class, 'byShipment']);

// === Alerts ===
Route::get('/alerts', [AlertController::class, 'index']);
Route::get('/alerts/shipment/{shipmentId}', [AlertController::class, 'byShipment']);

// === Ports ===
Route::get('/ports', [PortController::class, 'index']);
Route::get('/ports/{id}', [PortController::class, 'show']);

// === Users ===
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);