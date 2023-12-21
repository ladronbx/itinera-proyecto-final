<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'user_id',
        'trip_id',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'group_user');
    } // muchos a muchos (tabla intermedia) (group_user)

    public function trips(): BelongsToMany
    {
        return $this->belongsToMany(Trip::class);
    } // muchos a muchos (sin tabla intermedia explícita)

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(Activity::class, 'trips_activities');
    } // muchos a muchos (tabla intermedia) (trips_activities)

}