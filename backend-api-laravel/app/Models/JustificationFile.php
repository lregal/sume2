<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JustificationFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'leave_movement_id',
        'mime_type',
        'content',
        'active',
    ];

    public function leaveMovement(): BelongsTo
    {
        return $this->belongsTo(LeaveMovement::class);
    }


}
