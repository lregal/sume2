<?php

namespace App\Models;

use App\Models\Admin\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeaveMovementStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'reason',
        'updater_id',
        'active',
    ];

    public function leaveMovements(): HasMany
    {
        return $this->hasMany(LeaveMovement::class);
    }

    public function updaters(): HasMany
    {
        return $this->hasMany(User::class);
    }

}
