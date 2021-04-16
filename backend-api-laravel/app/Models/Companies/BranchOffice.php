<?php

namespace App\Models\Companies;

use App\Models\CardPunch\CardPunch;
use App\Models\ShiftOverride;
use App\Models\System\Country;
use App\Models\WorkShift;
use App\Models\Companies\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class BranchOffice extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_code',
        'name',
        'company_id',
        'coordinates_lat',
        'coordinates_lng',
        'active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'country_code' => 'required|exists:countries,code',
        'company_id' => 'required|exists:companies,id',
        'coordinates_lat' => 'nullable',
        'coordinates_lng' => 'nullable',
        'active' => 'boolean'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }


    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_code', 'code');
    }

    public function holidays(): BelongsToMany
    {
        return $this->belongsToMany(BranchOffice::class);
    }

    public function cardPunches(): HasMany
    {
        return $this->hasMany(CardPunch::class);
    }

    public function workShifts(): HasMany
    {
        return $this->hasMany(WorkShift::class);
    }

    public function costsCenters(): BelongsToMany
    {
        return $this->belongsToMany(CostsCenter::class, 'costs_center_branches', 'branch_office_id', 'costs_center_id');
    }

    public function shiftsOverrides(): HasMany
    {
        return $this->hasMany(ShiftOverride::class);
    }
}
