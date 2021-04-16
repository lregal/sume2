<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchOfficeHoliday extends Model
{
    use HasFactory;

    protected $fillable = [
        'holiday_id',
        'branch_office_id',
    ];


}


