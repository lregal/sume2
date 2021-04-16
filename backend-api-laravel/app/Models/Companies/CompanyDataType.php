<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CompanyDataType extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'min_limit',
        'max_limit',
        'value_type',
        'allowed_values',
        'value_regex',
        'active',
    ];

    public function companyData() : HasOne {
        return $this->hasOne(CompanyData::class);
    }
}
