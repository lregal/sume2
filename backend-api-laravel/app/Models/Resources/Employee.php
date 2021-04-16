<?php

namespace App\Models\Resources;

use App\Models\CardPunch\CardPunch;
use App\Models\Companies\Group;
use App\Models\LeaveMovement;
use App\Models\ShiftOverride;
use App\Models\Companies\Company;
use App\Models\Admin\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use \Illuminate\Database\Eloquent\Relations\HasOne;


class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'labor_file_number',
        'admition_date',
        'termination_date',
        'company_id',
        'bank_account_id',
        'active',
    ];


    public static $validator = [
        'active' => 'boolean',
        'labor_file_number' => 'string|required',
        'admition_date' => 'nullable',
        'termination_date' => 'nullable',
        'bank_account_id' => 'nullable|exists:bank_accounts,id',
        'company_id' => 'required|exists:companies,id',
        'person_id' => 'required|exists:people,id',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function bankAccount(): HasOne
    {
        return $this->hasOne(BankAccount::class);
    }

    public function collectiveAgreement(): HasManyThrough
    {
        return $this->hasManyThrough(CollectiveAgreement::class, EmploymentContract::class);
    }

    public function cardPunches(): HasMany
    {
        return $this->hasMany(CardPunch::class);
    }

    public function devices(): BelongsToMany
    {
        return $this->belongsToMany(Device::class, 'employee_devices', 'device_id', 'employee_id');
    }

    public function employmentContracts(): HasMany
    {
        return $this->hasMany(EmploymentContract::class);
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_employees', 'employee_id', 'group_id');
    }

    public function leaveMovements(): HasMany
    {
        return $this->hasMany(LeaveMovement::class);
    }

    public function shiftOverrides(): HasMany
    {
        return $this->hasMany(ShiftOverride::class);
    }

}
