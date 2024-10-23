<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trips extends Model
{
    public $timestamps = false; 
    protected $fillable = [
        'truck_id',
        'driver_id',
        'start_location',
        'end_location',
        'distance',
        'trip_date',
    ];
    public function driver()
    {
        return $this->belongsTo(Drivers::class, 'driver_id');
    }

    public function truck()
    {
        return $this->belongsTo(Trucks::class, 'truck_id');
    }
}
