<?php

namespace App\Http\Controllers\System;

use App\Models\System\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BanksController extends Controller
{
    public function index()
    {
        return Bank::query()->orderBy('name', 'desc')->get();
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
