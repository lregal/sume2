<?php

namespace App\Http\Controllers\Companies;

use App\Http\Controllers\Controller;
use App\Models\Companies\Group;
use App\Models\Companies\GroupEmployee;
use Illuminate\Http\Request;


class GroupEmployeesController extends Controller
{
    /**
     * @var string
     */
    private $m = GroupEmployee::class;
    private $pk = 'id';

    public function index()
    {

        return GroupEmployee
            ::join('employees', 'employees.id', '=', 'group_employees.employee_id')
            ->join('people', 'employees.person_id', '=', 'people.id')
            ->join('groups', 'groups.id', '=', 'group_employees.group_id')
            ->select('group_employees.*')
            ->with(
                'employee',
                'group',
                'employee.person')
            ->get();
    }

    public function store(Request $request)
    {
        return $this->rStore($this->m, $request, $this->pk);
    }

    public function show(Group $model)
    {
        return $model;
    }

    public function update(Request $request, Group $model)
    {
        return $this->rUpdate($this->m, $model, $request->all(), $this->pk);
    }

    public function destroy(Group $model)
    {
        return $this->rDestroy($model);
    }
}