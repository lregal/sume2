<?php

namespace App\Models\Sume;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonComment extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'person_id',
        'person_comment_type_id',
        'active'
    ];

    public static $validator = [
        'person_id' => 'required|exists:people,id',
        'person_comment_type_id' => 'required|exists:person_comment_types,id',
        'content' => 'required|string|max:2000',
        'active' => 'boolean'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function PersonCommentType(): BelongsTo
    {
        return $this->belongsTo(PersonCommentType::class);
    }
}
