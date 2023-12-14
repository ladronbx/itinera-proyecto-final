<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';

    protected $fillable = [
        'name',
        'description',
        'image_1',
        'image_2',
        'duration',
        'location_id',
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    } // muchas actividades pertenecen a una localización

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_trip_activities');
    } // muchos a muchos (tabla intermedia) (group_trip_activities)
}
