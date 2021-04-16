<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Holiday extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'country_code',
        'description',
        'holiday_type',
        'country_code',
        'active',
    ];

    public function branchOffices(): BelongsToMany
    {
        return $this->belongsToMany(BranchOffice::class, 'branch_office_holidays','holiday_id', 'branch_office_id');
    }
}
