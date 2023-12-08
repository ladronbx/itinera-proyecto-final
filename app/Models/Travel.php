<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    protected $fillable = [
        'start_date',
        'end_date',
        'is_active',
        'timestamp',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'groups', 'travel_id', 'user_id');
    } // muchos a muchos (tabla intermedia) (travel_user -> pertenece a groups)

    public function locations(): BelongsToMany
    {
        return $this->belongsToMany(Location::class, 'location_travel');
    } // muchos a muchos (tabla intermedia) (location_travel)
}