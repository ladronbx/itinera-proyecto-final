<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_1',
        'image_2',
        'duration',
        'location_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}