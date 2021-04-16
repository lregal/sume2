<?php

namespace App\Models\Companies;

use App\Models\Resources\CollectiveAgreement;
use App\Models\Resources\JobPosition;
use App\Models\Sume\CompanyComment;
use App\Models\Sume\CompanyFile;
use App\Models\Companies\CompanyType;
use App\Models\Sume\Position;
use App\Models\System\Country;
use App\Models\System\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{

    protected $fillable = [
        'name',
        'company_type_id',
        'business_name',
        'single_tax_identification_number',
        'email',
        'web_page',
        'coordinates_lat',
        'coordinates_lng',
        'active',
    ];


    public static $validator = [
        'name' => 'required|string',
        'business_name' => 'required|string|max:1000',
        'company_type_id' => 'required|exists:company_types,id',
        'country_code'=> 'required| exists: countries, code',
        'active' => 'boolean'
    ];

    protected $appends = ['address'];

    public function getAddressAttribute()
    {
        $street = $this->street;
        $house = $this->house_number;
        $apartment = $this->apartment_number;
        return preg_replace('/\s+/', ' ', $street . " " . $house . ($apartment != null ? " lok. " . $apartment : ""));
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_code', 'code');
    }

    public function positions(): HasMany
    {
        return $this->hasMany(Position::class);
    }

    public function companyType(): BelongsTo
    {
        return $this->belongsTo(CompanyType::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(CompanyComment::class)->orderBy('id', 'desc');
    }

    public function files(): HasMany
    {
        return $this->hasMany(CompanyFile::class)->orderBy('id', 'desc');
    }

    public function branchOffices(): HasMany
    {
        return $this->hasMany(BranchOffice::class);
    }

    public function clientCompanies(): BelongsToMany
    {
        return $this->belongsToMany(
            ClientCompany::class,
            'company_client_companies',
            'company_id',
            'company_client_id'
        );
    }

    public function collectiveAgreements(): BelongsToMany
    {
        return $this->belongsToMany(
            CollectiveAgreement::class,
            'company_collective_agreements',
            'collective_agreement_id',
            'company_id'
        );
    }

    public function jobPositions(): HasMany
    {
        return $this->hasMany(JobPosition::class);
    }

    public function places(): HasMany
    {
        return $this->hasMany(Place::class);
    }

    public function companyData(): HasMany
    {
        return $this->hasMany(CompanyData::class);
    }

}
