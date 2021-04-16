<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class WorkShift extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_office_id',
        'name',
        'modality_id',
        'active',
    ];

    public function branchOffice(): BelongsTo
    {
        return $this->belongsTo(BranchOffice::class);
    }

    public function modality(): BelongsTo
    {
        return $this->belongsTo(Modality::class);
    }

    public function shiftSchedules(): HasMany
    {
        return $this->hasMany(ShiftSchedule::class);
    }

}
