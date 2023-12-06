<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }

    // public function group_user()
    // {
    //     return $this->hasMany(Group_user::class);
    // }
}
