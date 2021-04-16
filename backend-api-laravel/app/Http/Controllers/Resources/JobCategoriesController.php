<?php

namespace App\Http\Controllers\Resources;

use App\Models\Resources\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobCategoriesController extends Controller
{
    public function index()
    {
        return JobCategory
            ::with('CollectiveAgreement')
            ->orderBy('name')
            ->get();
    }
}
