<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShiftSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_shift_id',
        'date_from',
        'date_to',
        'days_of_week',
        'in_time',
        'out_time',
        'working_time',
        'active',
    ];

    public function shiftOverrides(): HasMany
    {
        return $this->hasMany(ShiftOverride::class);
    }

    public function workShift() : BelongsTo
    {
        return $this->belongsTo(WorkShift::class);
    }
}
