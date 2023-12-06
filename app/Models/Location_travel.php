<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location_travel extends Model
{
    use HasFactory;

    protected $table = 'location_travel';

    protected $fillable = [
        'location_id',
        'travel_id',
    ];

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}