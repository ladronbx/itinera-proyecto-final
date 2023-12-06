<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}