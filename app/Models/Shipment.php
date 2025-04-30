<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
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

    public function weatherRisks()
    {
        return $this->hasMany(WeatherRisk::class, 'linked_to_shipment_id');
    }

    public function port()
    {
        return $this->belongsTo(Port::class, 'destination', 'name');
    }
}
