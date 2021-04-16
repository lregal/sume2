<?php

namespace App\Models\Companies;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupCostsCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'costs_center_id',
        'active',
    ];

    public static $validator = [
        'costs_center_id' => 'required|exists:costs_centers,id',
        'group_id' => 'required|exists:groups,id',
        'active' => 'boolean'
    ];

    public function group() : BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function costsCenter() : BelongsTo
    {
        return $this->belongsTo(CostsCenter::class);
    }
}
