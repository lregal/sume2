<?php

namespace App\Models\Companies;

use App\Models\Companies\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyData extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_value',
        'company_data_type_id',
        'company_id',
        'active',
    ];

    public function companyDataType(): BelongsTo
    {
        return $this->belongsTo(CompanyData::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
