<?php

namespace App\Http\Controllers\CardPunch;

use App\Models\CardPunch\CardPunch;
use App\Models\Companies\BranchOffice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon;
use Validator;
use Auth;


class CardPunchController extends Controller
{

    private $m = CardPunch::class;
    private $pk = 'id';

    public function index()
    {
        return CardPunch::with('punchType')
            ->with('branchOffice')           
            //->orderBy('id', 'asc')
            ->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $userId = Auth::user()->id;


        $cardPunch = new CardPunch();
        //$cardPunchStatus->status = "accepted";
        $fields = $cardPunch::$validator;
        /*$validator = Validator::make($request->all(), $fields);
        if ($validator->fails()) {
            return ['status' => -2, 'msg' => $validator->errors()];
        }*/
        
        $mytime = Carbon\Carbon::now();
        //$mytime->toDateTimeString();
        ///$resultados['timezone'] = date ('O' )  ;
        ///$dt = new \DateTime($mytime);
        //$dt->setTimezone(new \DateTimeZone($resultados['timezone']));

        ///echo $resultados['parsedDate'] = $dt->format(\DateTime::ISO8601);

        $cardPunch->punch_type_id = $request->post("punch_type_id");
        $cardPunch->employee_id = $userId;
        $cardPunch->branch_office_id = $request->post("branch_office_id");
        $cardPunch->movement_timestamp = $mytime;
        $cardPunch->observations = "";

        $cardPunch->save();
        //var_dump($request->all()); 

        return ['status' => 0, 'id' => $cardPunch['id']];
    }

    public function show(CardPunch $cardPunch)
    {
        //
    }

    public function edit(CardPunch $cardPunch)
    {
        //
    }

    public function update(Request $request, CardPunch $cardPunch)
    {
        //
    }

    public function destroy(CardPunch $cardPunch)
    {
        //
    }
}
