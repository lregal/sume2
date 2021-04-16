<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id',
        'employee_id',
        'active',
    ];

}
