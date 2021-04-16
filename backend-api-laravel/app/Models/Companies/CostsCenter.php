<?php

namespace App\Models\Companies;

use App\Models\Companies\BranchOffice;
use App\Models\Companies\ClientCompany;
use App\Models\Companies\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CostsCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'active' => 'boolean'
    ];

    public function branchOffices(): BelongsToMany
    {
        return $this->belongsToMany(BranchOffice::class, 'costs_center_branches', 'costs_center_id', 'branch_office_id');
    }

    public function clientCompanies(): BelongsToMany
    {
        return $this->belongsToMany(ClientCompany::class, 'costs_center_client_companies', 'client_company_id', 'costs_center_id');
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_costs_centers', 'costs_center_id', 'group_id');
    }

    public function costsCenterBranches() : HasMany
    {
        return $this->hasMany(CostsCenterBranch::class);
    }

    public function costsCenterGroups() : HasMany
    {
        return $this->hasMany(GroupCostsCenter::class);
    }

    public function costsCenterClientCompanies() : HasMany
    {
        return $this->hasMany(CostsCenterClientCompany::class);
    }
}
