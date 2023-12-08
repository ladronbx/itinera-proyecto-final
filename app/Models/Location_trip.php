<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location_trip extends Model
{
    use HasFactory;

    protected $table = 'location_trip';

    protected $fillable = [
        'location_id',
        'trip_id',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}