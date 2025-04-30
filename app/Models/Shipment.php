<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = 'shipment';

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function tracker()
    {
        return $this->belongsTo(Tracker::class);
    }

    public function timelineEntries()
    {
        return $this->hasMany(TimelineEntry::class);
    }

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
}
