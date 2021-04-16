<?php

namespace App\Http\Controllers\System;
use App\Http\Controllers\Controller;
use App\Models\System\Country;


class CountriesController extends Controller
{

    public function index()
    {
        return Country::orderBy('code', 'asc')->get();
    }
}
