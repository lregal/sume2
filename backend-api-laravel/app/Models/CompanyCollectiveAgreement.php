<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCollectiveAgreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'collective_agreement_id',
        'company_id',
        'active',
    ];
}
