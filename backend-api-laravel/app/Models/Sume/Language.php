<?php

namespace App\Models\Sume;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    protected $fillable = ['name', 'priority'];
    
    public static $validator = [
    ];

    public $timestamps = false;
    
    public function people() : HasMany
    {
        return $this->hasMany(Person::class);
    }
}
