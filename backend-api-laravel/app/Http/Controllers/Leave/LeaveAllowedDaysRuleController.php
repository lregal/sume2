<?php

namespace App\Http\Controllers\Leave;

use App\Models\Leaves\LeaveAllowedDaysRule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LeaveAllowedDaysRuleController extends Controller
{

    private $m = LeaveAllowedDaysRule::class;
    private $pk = 'id';

    public function index()
    {
        return LeaveAllowedDaysRule::orderBy('days_type')->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Bank $bank)
    {
        //
    }

    public function edit(Bank $bank)
    {
        //
    }

    public function update(Request $request, Bank $bank)
    {
        //
    }

    public function destroy(Bank $bank)
    {
        //
    }

}
