<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;
use App\Models\Admin\Permission;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPermission extends Model
{
    protected $fillable = [
        'user_id',
        'permission_id'
    ];
    
    public static $validator = [
        'user_id' => 'required|exists:users,id',
        'permission_id' => 'required|exists:permissions,id',
        'active' => 'boolean'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function permission() : BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
