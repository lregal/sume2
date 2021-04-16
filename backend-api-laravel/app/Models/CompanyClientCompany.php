<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyClientCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'company_client_id',
        'active',
    ];
}
