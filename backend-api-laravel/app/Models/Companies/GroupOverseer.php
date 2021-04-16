<?php

namespace App\Models\Companies;

use App\Models\Sume\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupOverseer extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'person_id',
        'active',
    ];

    public static $validator = [
        'group_id' => 'required|exists:groups,id',
        'person_id' => 'required|exists:people,id',
        'active' => 'boolean'
    ];

    public function group() : BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function person() : BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

}
