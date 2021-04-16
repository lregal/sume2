<?php

namespace App\Models\System;


use App\Models\Resources\BankAccount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'active' => 'boolean'
    ];

    public function bankAccounts(): HasMany
    {
        return $this->hasMany(BankAccount::class);
    }
}
