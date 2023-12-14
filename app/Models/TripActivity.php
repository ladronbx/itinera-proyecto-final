<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripActivity extends Model
{
    use HasFactory;

    protected $table = 'trip_activities';

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
