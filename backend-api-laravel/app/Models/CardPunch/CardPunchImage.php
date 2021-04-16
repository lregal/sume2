<?php

namespace App\Models\CardPunch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class CardPunchImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_punch_id',
        'mime_type',
        'content',
        'active',
    ];

    public function cardPunch() : BelongsTo
    {
        return $this->belongsTo(CardPunch::class);
    }
}
