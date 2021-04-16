<?php

namespace App\Models\Companies;

use App\Models\Resources\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupEmployee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'group_id',
        'active',
    ];

    public static $validator = [
        'employee_id' => 'required|exists:employees,id',
        'group_id' => 'required|exists:groups,id',
        'active' => 'boolean'
    ];

    public function group() : BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }






}
