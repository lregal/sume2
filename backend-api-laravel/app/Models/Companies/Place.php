<?php

namespace App\Models\Companies;

use App\Models\Companies\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'latitude',
        'longitude',
        'name',
        'address',
        'company_id',
        'active',
    ];


    public static $validator = [
        'name' => 'required|string',
        'company_id' => 'required|exists:companies,id',
        'latitude' => 'nullable',
        'longitude' => 'nullable',
        'address' => 'string|nullable',
        'active' => 'boolean'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
