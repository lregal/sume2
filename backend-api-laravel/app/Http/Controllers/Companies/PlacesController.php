<?php

namespace App\Http\Controllers\Companies;

use App\Models\Companies\Place;
use App\Models\Companies\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PlacesController extends Controller
{
    public function index()
    {
        return Place::with('company')
            ->orderBy('name', 'desc')
            ->get();
    }
}
