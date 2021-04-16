<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CostsCenterClientCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'costs_center_id',
        'client_company_id',
        'active',
    ];

    public static $validator = [
        'costs_center_id' => 'required|exists:costs_centers,id',
        'client_company_id' => 'required|exists:company_client_companies,id',
        'active' => 'boolean'
    ];

    public function costsCenter() : BelongsTo
    {
        return $this->belongsTo(CostsCenter::class);
    }

    public function clientCompany() : BelongsTo
    {
        return $this->belongsTo(ClientCompany::class);
    }
}
