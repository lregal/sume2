<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Models\Resources\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:read', ['only' => ['index', 'show']]);
        $this->middleware('role:insert', ['only' => ['store']]);
        $this->middleware('role:update', ['only' => ['update', 'multipleUpdate']]);
        $this->middleware('role:delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        return Employee
            ::with('person')
            ->get();
    }

    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Resources\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Resources\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Resources\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
