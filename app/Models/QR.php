<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QR extends Model
{
    protected $fillable = [
        'code',
        'scanned_at',
    ];

    protected $casts = [
        'scanned_at' => 'datetime',
    ];
}
