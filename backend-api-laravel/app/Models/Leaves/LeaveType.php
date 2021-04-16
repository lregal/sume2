<?php

namespace App\Models\Leaves;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LeaveType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'leave_allowed_days_rule_id',
        'active',
    ];

    public static $validator = [
        'name' => 'required|string',
        'description' => 'required|string',
        'leave_allowed_days_rule_id' => 'required|exists:leave_allowed_days_rules,id',
        'type' => 'string'
    ];

    public function leaveAllowedDaysRule(): BelongsTo
    {
        return $this->BelongsTo(LeaveAllowedDaysRule::class);
    }

    public function leaveMovement(): HasOne
    {
        return $this->hasOne(LeaveType::class);
    }
}
