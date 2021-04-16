<?php

namespace App\Http\Controllers\Leave;

use App\Models\Leaves\LeaveType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TypesController extends Controller
{

    public function index()
    {
        return json_encode(config('enums.type'));
    }

}
