<?php

namespace App\Http\Controllers\Companies;

use App\Http\Controllers\Controller;
use App\Models\Companies\Group;
use App\Models\Companies\GroupOverseer;
use Illuminate\Http\Request;


class GroupOverseersController extends Controller
{
    /**
     * @var string
     */
    private $m = GroupOverseer::class;
    private $pk = 'id';

    public function index()
    {
        return GroupOverseer
            ::with('person')
            ->with('group')
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