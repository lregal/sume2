<?php

namespace App\Models\System;

use App\Models\IdentityType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'active',
    ];

    public function identityTypes(): HasMany
    {
        return $this->hasMany(IdentityType::class);
    }

}
