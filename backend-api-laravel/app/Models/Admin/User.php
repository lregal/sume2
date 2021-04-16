<?php

namespace App\Models\Admin;

use App\Models\CardPunch\CardPunchUpdateLog;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'initial_password',
        'user_type_id',
        'active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public static $validator = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255|unique:users,email',
        'user_type_id' => 'exists:user_types,id',
        'active' => 'nullable',
    ];

    public function userPermissions() : HasMany
    {
        return $this->hasMany(UserPermission::class);
    }

    public function userType(): BelongsTo
    {
        return $this->belongsTo(UserType::class, 'user_type_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims() : array
    {
        return [];
    }

    public function cardPunchesUpdates() : HasMany
    {
        return $this->hasMany(CardPunchUpdateLog::class);
    }
}
