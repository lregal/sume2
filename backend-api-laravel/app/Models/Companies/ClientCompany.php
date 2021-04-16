<?php

namespace App\Models\Companies;

use App\Models\Resources\EmploymentContract;
use App\Models\Companies\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active',
    ];

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class, 'company_client_companies', 'company_client_id', 'company_id');
    }

    public function costsCenters(): BelongsToMany
    {
        return $this->belongsToMany(CostsCenter::class, 'costs_center_client_companies', 'costs_center_id', 'client_company_id');
    }

    public function employmentContracts(): HasMany
    {
        return $this->hasMany(EmploymentContract::class);
    }
}