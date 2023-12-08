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
        'travel_id',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'group_user');
    } // muchos a muchos (tabla intermedia) (group_user)

    public function travels(): BelongsToMany
    {
        return $this->belongsToMany(Travel::class);
    } // muchos a muchos (sin tabla intermedia explícita)

}