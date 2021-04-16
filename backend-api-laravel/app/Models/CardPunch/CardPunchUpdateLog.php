<?php

namespace App\Models\CardPunch;

use App\Models\Admin\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardPunchUpdateLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_punch_id',
        'reason',
        'updater_id',
        'modified_data',
        'active',
    ];


    public function cardPunch(): BelongsTo
    {
        return $this->belongsTo(CardPunch::class);
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
