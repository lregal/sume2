<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IdentityType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'country_id',
        'active',
    ];

    public function country(): HasOne
    {
        return $this->HasOne(Country::class);
    }
}
