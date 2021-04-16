<?php

namespace App\Http\Controllers\Resources;

use App\Models\Resources\JobCategory;
use App\Models\Resources\JobPosition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobPositionsController extends Controller
{
    public function index()
    {
        return JobPosition
            ::with('company')
            ->orderBy('name')
            ->get();
    }
}
