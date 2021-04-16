<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CensusDataType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'min_limit',
        'max_limit',
        'value_type',
        'allowed_values',
        'value_regex',
        'active',
    ];

    public function censusData() : HasOne {
        return $this->hasOne(CensusData::class);
    }

}
