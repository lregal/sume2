<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CollectiveAgreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sector',
        'active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'active' => 'boolean',
        'sector' => 'required|string'
    ];

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(CollectiveAgreement::class, 'company_collective_agreements', 'company_id', 'collective_agreement_id');
    }

    public function jobCategories(): HasMany
    {
        return $this->hasMany(JobCategory::class);
    }

    public function employmentContract() : HasMany
    {
        return $this->hasMany(EmploymentContract::class);
    }

}
