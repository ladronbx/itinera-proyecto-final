<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'is_active',
        'timestamp',
    ];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    public function locationTravels()
    {
        return $this->hasMany(LocationTravel::class);
    }

    public function travels(): HasMany
    {
        return $this->hasMany(Travel::class);
    }

    public function travel_locationManyToMany(): BelongsToMany
    {
        return $this->belongsToMany(Location::class, 'location_travel');
    }
}