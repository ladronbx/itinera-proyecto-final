<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'role',
        'is_active',
        'timestamp',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }

    public function user_groupManyToMany(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_user');
    }
}