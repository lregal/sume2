<?php

namespace App\Models\Resources;

use App\Models\Sume\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\System\Bank;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'bank_id',
        'person_id',
        'unified_banking_code',
        'account_number',
        'alias'
    ];

    public static $validator = [
        'alias' => 'required|string',
        'active' => 'boolean',
        'bank_id' => 'required|exists:banks,id',
        'person_id' => 'required|exists:people,id',
        'unified_banking_code' => 'string',
        'account_number' => 'string'
    ];


    public function bank(): BelongsTo
    {
        return $this->BelongsTo(Bank::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
