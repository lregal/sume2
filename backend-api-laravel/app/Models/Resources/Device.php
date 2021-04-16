<?php

namespace App\Models\Resources;

use App\Models\Companies\Company;
use App\Models\Admin\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
        'owner_company_id',
        'owner_person_id',
        'active',
    ];

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class, 'employee_devices', 'employee_id','device_id');
    }

    public function ownerCompany() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function ownerPerson() : BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
