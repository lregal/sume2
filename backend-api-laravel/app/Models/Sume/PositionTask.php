<?php

namespace App\Models\Sume;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PositionTask extends Model
{
    protected $fillable = [
        'position_id',
        'task_id',
    ];

    public static $validator = [
        'position_id' => 'required|exists:positions,id',
        'task_id' => 'required|exists:tasks,id',
        'active' => 'boolean'
    ];

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
