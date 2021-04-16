<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'collective_agreement_id',
        'active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'active' => 'boolean',
        'collective_agreement_id' => 'required|exists:collective_agreements,id'
        
    ];

    public function collectiveAgreement(): BelongsTo
    {
        return $this->belongsTo(CollectiveAgreement::class);
    }

    public function employmentContracts() : HasMany{
        return $this->hasMany(EmploymentContract::class);
    }
}
