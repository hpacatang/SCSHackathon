<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'product_name',
        'quantity',
        'qr_code',
        'last_scanned',
        'warehouse_id',
        'is_critical',
    ];

    protected $casts = [
        'is_critical' => 'boolean',
        'last_scanned' => 'datetime',
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
