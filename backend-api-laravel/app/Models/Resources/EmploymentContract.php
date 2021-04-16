<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmploymentContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_position_id',
        'collective_agreement_id',
        'work_shift_id',
        'reason_for_termination',
        'job_category_id',
        'company_client_id',
        'start_date',
        'end_date',
        'salary',
        'additionals',
        'gross_salary',
        'active',
    ];

    public function jobPosition() : BelongsTo
    {
        return $this->belongsTo(JobPosition::class);
    }

    public function collectiveAgreement() : BelongsTo
    {
        return $this->belongsTo(CollectiveAgreement::class);
    }

    public function workShift() : BelongsTo
    {
        return $this->belongsTo(WorkShift::class);
    }

    public function jobCategory() : BelongsTo
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function clientCompany() : BelongsTo{
        return $this->belongsTo(ClientCompany::class);
    }
}
