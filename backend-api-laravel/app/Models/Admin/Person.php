<?php

namespace App\Models\Admin;


use App\Models\Companies\Group;
use App\Models\Resources\BankAccount;
use App\Models\Resources\Employee;
use App\Models\Sume\Language;
use App\Models\Sume\PersonComment;
use App\Models\Sume\Position;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;


class Person extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'distinction',
        'language_id',
        'email',
        'phone',
        'active',
    ];
    protected $appends = ['fullname'];
    
    public function getFullnameAttribute()
    {
        return $this->lastname." ".$this->firstname;
    }
    
    public static $validator = [
        'firstname' => 'required|string',
        'lastname' => 'required|string',
        'distinction' => 'string|nullable',
        'language_id' => 'required|exists:languages,id',
        'email' => 'string|nullable',
        'phone' => 'string|nullable',
        'active' => 'boolean'
    ];

    /**
     * Get the bank account's owner.
     */
    public function bankAccount() : HasOneThrough
    {
        return $this->hasOneThrough(Employee::class, BankAccount::class);
    }

    public function positions() : HasMany
    {
        return $this->hasMany(Position::class);
    }

    public function language() :BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function comments() : HasMany
    {
        return $this->hasMany(PersonComment::class)->orderBy('id', 'desc');
    }

    public function groups() : BelongsToMany
    {
        return  $this->belongsToMany(Group::class, 'group_overseers','person_id','group_id');
    }
}
