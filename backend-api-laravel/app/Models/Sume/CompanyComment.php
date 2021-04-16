<?php

namespace App\Models\Sume;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyComment extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'company_id',
        'company_comment_type_id',
        'active'
    ];
    
    public static $validator = [
        'company_id' => 'required|exists:companies,id',
        'company_comment_type_id' => 'required|exists:company_comment_types,id',
        'content' => 'required|string|max:2000',
        'active' => 'boolean'
    ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function companyCommentType() : BelongsTo
    {
        return $this->belongsTo(CompanyCommentType::class);
    }
}
