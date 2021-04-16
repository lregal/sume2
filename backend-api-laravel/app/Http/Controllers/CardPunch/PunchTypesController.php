<?php

namespace App\Http\Controllers\CardPunch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CardPunch\CardPunch;
use App\Models\Resources\Employee;
use Auth;


class PunchTypesController extends Controller
{

    public function index()
    {
        $userId = Auth::user()->id;
        $ultimoIngreso = CardPunch::where('employee_id',$userId)->orderBy('created_at','desc')->first();
        
        return json_encode($ultimoIngreso->getLastType());
    }

}
