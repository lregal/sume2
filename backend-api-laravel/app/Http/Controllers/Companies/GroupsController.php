<?php

namespace App\Http\Controllers\Companies;

use App\Http\Controllers\Controller;
use App\Models\Companies\Group;

class GroupsController extends Controller
{

    public function index()
    {
        return Group
            ::with('company')
            ->with('branchOffice')
            ->orderBy('company_id')
            ->get();
    }

    private $m = Group::class;
    private $pk = 'id';

    public function show($id)

    {
        $groupInfo = Group
            ::where('id', $id)
            ->with('groupEmployees', 'groupEmployees.employee.person')
            ->with('groupOverseers', 'groupOverseers.person')
            ->first();
        return $groupInfo;
    }

}
