<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupTripActivity extends Model
{
    use HasFactory;

    protected $table = 'group_trip_activities';

    protected $fillable = [
        'group_id',
        'trip_id',
        'activity_id',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    } 

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
