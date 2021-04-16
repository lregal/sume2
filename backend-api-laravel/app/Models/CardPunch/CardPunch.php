<?php

namespace App\Models\CardPunch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\CardPunch\PunchType;
use App\Models\Companies\BranchOffice;

class CardPunch extends Model
{
    use HasFactory;

    protected $fillable = [
        'punch_type_id',
        'employee_id',
        'branch_office_id',
        'movement_timestamp',
        'coordinates_lat',
        'coordinates_lng',
        'observations',
        'active',
    ];

    public static $validator = [
        'employee_id'       => 'required|exists:people,id',
        'punch_type_id'     => 'required|exists:punch_type,id',
        'branch_office_id'  => 'required|exists:branch_office,id',
        'movement_timestamp' => 'required|string|max:200',
        'coordinates_lat'   => 'string|max:200|nullable',
        'coordinates_lng'   => 'string|max:200|nullable',
        'observations'      => 'string|max:200|nullable',
        //'leave_allowed_days_rule_id' => 'required|exists:leave_allowed_days_rules,id',
        
    ];

    public function punchType(): BelongsTo
    {
        return $this->belongsTo(PunchType::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function branchOffice(): BelongsTo
    {
        return $this->belongsTo(BranchOffice::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CardPunchImage::class);
    }

    public function updateLogs(): HasMany
    {
        return $this->hasMany(CardPunchUpdateLog::class);
    }

    public function getLastType()
    {
        if($this->punchType->in_out == "in")
        {
            $punchTypes = PunchType::where('in_out',"out")->get();            
        }
        else
        {
            $punchTypes = PunchType::where('in_out',"in")->get();
        }
        
        return $punchTypes;
    }
}
