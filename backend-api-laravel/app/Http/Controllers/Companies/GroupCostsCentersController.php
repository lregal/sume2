<?php

namespace App\Http\Controllers\Companies;
use App\Http\Controllers\Controller;
use App\Models\Companies\CostsCenter;
use App\Models\Companies\GroupCostsCenter;
use Illuminate\Http\Request;

class GroupCostsCentersController extends Controller
{
    /**
     * @var string
     */
    private $m = GroupCostsCenter::class;
    private $pk = 'id';

    public function index()
    {
        return GroupCostsCenter
            ::with('costsCenter')
            ->with('group')
            ->get();
    }

    public function store(Request $request)
    {
        return $this->rStore($this->m, $request, $this->pk);
    }
    public function show(CostsCenter $model)
    {
        return $model;
    }
    public function update(Request $request, CostsCenter $model)
    {
        return $this->rUpdate($this->m, $model, $request->all(), $this->pk);
    }
    public function destroy(CostsCenter $model)
    {
        return $this->rDestroy($model);
    }
}
