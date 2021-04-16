<?php

namespace App\Http\Controllers\Leave;

use App\Models\Leaves\LeaveType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LeaveTypesController extends Controller
{

    private $m = LeaveType::class;
    private $pk = 'id';

    public function index()
    {
        return LeaveType::with('leaveAllowedDaysRule')
            //->orderBy('id', 'asc')
            ->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(LeaveType $leaveType)
    {
        //
    }

    public function edit(LeaveType $leaveType)
    {
        //
    }

    public function update(Request $request, LeaveType $leaveType)
    {
        //
    }

    public function destroy(LeaveType $leaveType)
    {
        //
    }

    public function type(Request $request)
    {
        echo "vamos a ver";
        return json_encode(config('enums.type'));
    }

}
