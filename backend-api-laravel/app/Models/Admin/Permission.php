<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\UserPermission;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
    protected $fillable = [
        'name', 'code', 'active',
    ];
    
    public static $validator = [
        'name' => 'required|string',
        'code' => 'required|string|max:10',
        'active' => 'boolean'
    ];
    
    public function permissionUsers() : HasMany
    {
        return $this->hasMany(UserPermission::class);
    }
}
