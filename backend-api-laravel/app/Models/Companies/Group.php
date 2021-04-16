<?php

namespace App\Models\Companies;


use App\Models\Resources\Employee;
use App\Models\Sume\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'branch_office_id',
        'active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'company_id' => 'exists:companies,id',
        'branch_office_id' => 'nullable|exists:branch_offices,id',
        'active' => 'boolean'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function branchOffice(): BelongsTo
    {
        return $this->belongsTo(BranchOffice::class);
    }

    public function costsCenters(): BelongsToMany
    {
        return $this->belongsToMany(CostsCenter::class, 'group_costs_centers', 'group_id', 'costs_center_id');
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'group_employees', 'group_id', 'employee_id');
    }

    public function overseers(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'group_overseers', 'group_id', 'person_id');
    }

    public function groupOverseers(): HasMany
    {
        return $this->hasMany(GroupOverseer::class);
    }

    public function groupEmployees(): HasMany
    {
        return $this->hasMany(GroupEmployee::class);
    }
}