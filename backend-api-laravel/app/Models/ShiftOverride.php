<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShiftOverride extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_office_id',
        'employee_id',
        'shift_schedule_id',
        'active',
    ];

    public function branchOffice(): BelongsTo
    {
        return $this->belongsTo(BranchOffice::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function shiftSchedule(): BelongsTo

    {
        return $this->belongsTo(ShiftSchedule::class);
    }

}
