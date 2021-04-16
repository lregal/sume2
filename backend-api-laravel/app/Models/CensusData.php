<?php

namespace App\Models;

use App\Models\Sume\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CensusData extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_value',
        'census_data_type_id',
        'person_id',
        'active',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(CensusDataType::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

}
