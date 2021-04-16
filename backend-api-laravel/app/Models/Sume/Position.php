<?php

namespace App\Models\Sume;

use App\Models\Admin\Person;
use App\Models\Companies\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    protected $fillable = [
        'person_id',
        'company_id',
        'name',
        'phone',
        'phone_2',
        'phone_3',
        'email',
        'email_2',
        'comment',
        'active',
    ];

    public static $validator = [
        'person_id' => 'required|exists:people,id',
        'company_id' => 'required|exists:companies,id',
        'name' => 'string|max:255|nullable',
        'phone' => 'string|max:50|nullable',
        'phone_2' => 'string|max:50|nullable',
        'phone_3' => 'string|max:50|nullable',
        'email' => 'string|max:255|nullable',
        'email_2' => 'string|max:255|nullable',
        'comment' => 'string|max:500|nullable',
        'active' => 'boolean'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function positionTasks(): HasMany
    {
        return $this->hasMany(PositionTask::class);
    }
}
