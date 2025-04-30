<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimelineEntry extends Model
{
    protected $table = 'timeline_entry';

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }
}