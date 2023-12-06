<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_1',
        'image_2',
        'image_3',
        'timestamp',
    ];

    public function locationTravels()
    {
        return $this->hasMany(LocationTravel::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function travels()
    {
        return $this->belongsToMany(Travel::class, 'location_travel', 'location_id', 'travel_id');
    }

    public function location_travelManyToMany(): BelongsToMany
    {
        return $this->belongsToMany(Travel::class, 'location_travel');
    }
}