<?php

namespace App\Models\Sume;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyFile extends Model
{
    protected $fillable = [
        'company_id',
        'file',
        'file_2',
        'description',
        'active'
    ];
    
    public static $validator = [
        'company_id' => 'required|exists:companies,id',
        'file' => 'required|string',
        'file_2' => 'string|nullable',
        'description' => 'string|nullable',
        'active' => 'boolean',
    ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
