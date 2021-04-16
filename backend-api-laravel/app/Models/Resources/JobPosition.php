<?php

namespace App\Models\Resources;


use App\Models\Companies\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'company_id' => 'required|exists:companies,id',
        'active' => 'boolean'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
