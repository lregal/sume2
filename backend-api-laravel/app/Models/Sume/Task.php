<?php

namespace App\Models\Sume;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'active'];

    public static $validator = [
        'name' => 'required|string|max:200',
        'description' => 'string|max:500|nullable',
        'active' => 'boolean'
    ];

    public function taskPositions(): HasMany
    {
        return $this->hasMany(PositionTask::class);
    }
}
