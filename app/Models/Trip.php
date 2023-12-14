<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips';

    protected $fillable = [
        'start_date',
        'end_date',
        'is_active',
        'timestamp',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'groups', 'trip_id', 'user_id');
    } // muchos a muchos (tabla intermedia) (trip_user -> pertenece a groups)

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class, 'location_trip');
    } // muchos a muchos (tabla intermedia) (location_trip)

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class, 'group_trip_activities');
    } // muchos a muchos (tabla intermedia) (group_trip_activities)
}