<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function trips(): BelongsToMany
    {
        return $this->belongsToMany(Trip::class, 'location_trip');
    } // muchos a muchos (tabla intermedia) (location_trip)

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    } // uno a muchos
}