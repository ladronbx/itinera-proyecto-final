<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}