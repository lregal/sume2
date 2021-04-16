<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CostsCenterBranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'costs_center_id',
        'branch_office_id',
        'active',
    ];

    public static $validator = [
        'costs_center_id' => 'required|exists:costs_centers,id',
        'branch_office_id' => 'required|exists:branch_offices,id',
        'active' => 'boolean'
    ];

    public function costsCenter() : BelongsTo
    {
        return $this->belongsTo(CostsCenter::class);
    }

    public function branchOffice() : BelongsTo
    {
        return $this->belongsTo(BranchOffice::class);
    }
}
