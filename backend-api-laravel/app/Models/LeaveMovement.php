<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeaveMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_type_id',
        'additional_remarks',
        'employee_id',
        'leave_movement_status_id',
        'leave_movement_dependency_id',
        'active',
    ];

    public function justificationfiles(): HasMany
    {
        return $this->hasMany(JustificationFile::class);
    }

    public function leaveType(): BelongsTo
    {
        return $this->belongsTo(LeaveType::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function leaveMovementStatus(): BelongsTo
    {
        return $this->BelongsTo(LeaveMovementStatus::class);
    }

}
