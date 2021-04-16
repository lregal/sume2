<?php

namespace App\Http\Controllers\Companies;
use App\Http\Controllers\Controller;
use App\Models\Companies\BranchOffice;
use Illuminate\Http\Request;

class BranchOfficesController extends Controller
{
    public function index() {
        return BranchOffice
            ::with('company')
            ->with('country')
            ->orderBy('name')->get();
    }
}
