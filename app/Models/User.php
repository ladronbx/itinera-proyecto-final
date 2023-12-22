<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject; // Añade esta línea
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements JWTSubject // Añade 'implements JWTSubject' aquí
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
    } // 1 a muchos

    public function user_groupManyToMany(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_user');
    } // muchos a muchos (tabla intermedia) (user_group)

    public function trips(): BelongsToMany
    {
        return $this->belongsToMany(Trip::class, 'groups', 'user_id', 'trip_id');
    } // muchos a muchos (tabla intermedia) (user_trip -> pertenece a groups)

    // Añade estos dos métodos
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'role' => $this->role,
        ];
    }
}