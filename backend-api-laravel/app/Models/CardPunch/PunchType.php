<?php

namespace App\Models\CardPunch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PunchType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'in_out',
        'active',
    ];

    public function cardPunch(): HasMany
    {
        return $this->hasMany(CardPunch::class);
    }
}
