<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_activity extends Model
{
    use HasFactory;

    protected $table = 'trips_activities';

    protected $fillable = [
        'trip_id',
        'activity_id',
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    } 

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
