<?php

namespace App\Http\Controllers\Companies;

use App\Http\Controllers\Controller;
use App\Models\Companies\CostsCenter;

class CostsCentersController extends Controller
{

    public function index()
    {
        return CostsCenter
            ::with('branchOffices')
            ->with('clientCompanies')
            ->with('groups')
            ->orderBy('name')
            ->get();
    }


    private $m = CostsCenter::class;
    private $pk = 'id';

    public function show($id)
    {
        $costsCenterInfo = CostsCenter
            ::where('id', $id)
            ->with('costsCenterBranches', 'costsCenterBranches.branchOffice')
            ->with('costsCenterGroups', 'costsCenterGroups.group')
            ->with('costsCenterClientCompanies', 'costsCenterClientCompanies.clientCompany')
            ->first();
        return $costsCenterInfo;
    }
}
