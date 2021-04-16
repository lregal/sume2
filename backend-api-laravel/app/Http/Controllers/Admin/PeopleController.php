<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libraries\ModelTreatment;

class PeopleController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:read', ['only' => ['index', 'show', 'search']]);
        $this->middleware('role:insert', ['only' => ['store']]);
        $this->middleware('role:update', ['only' => ['update', 'multipleUpdate']]);
        $this->middleware('role:delete', ['only' => ['destroy']]);
    }

    private $m = Person::class;
    private $pk = 'id';

    public function index()
    {
        return Person
            ::query()
            ->orderBy('lastname', 'asc')
            ->orderBy('firstname', 'asc')
            ->orderBy('distinction', 'asc')
            ->with('language')
            ->get();
    }
    public function show($id)
    {
        $personInfo = Person
            ::query()
            ->where('id', $id)
            ->with('language')
            ->with('positions', 'positions.company')
            ->with('comments', 'comments.personCommentType', 'comments.user')
            ->with(
                ['comments' => function ($query) {
                    $query->where('active', true);
                }],
                'comments.personCommentType',
                'comments.user'
            )
            ->first();
        return $personInfo;
    }
    public function search(Request $request)
    {
        $columns = ['id', 'firstname', 'lastname', 'email', 'phone','language'];

        $model = Person
        ::with('language')
        ->leftJoin(
            DB::raw("
            (SELECT
                id as languages_id,
                name as language
            FROM
                languages) l
            "),
            'l.languages_id', '=', 'people.language_id'
        );

        return ModelTreatment::getAsyncData($model, $request, $columns, 'sume', 'people', 'lastname', 'ASC');
    }
    public function itemsList($mode, $search = '')
    {
        $people = DB::table('people')
            ->select('id', DB::raw("CONCAT(lastname, ' ', firstname) as phrase"))
            ->orderBy("phrase", 'asc');

        if($mode == 'id'){
            $people = $people->where('id', $search);
        }
        else if($mode == 'phrase'){
            $people = $people->where(DB::raw("CONCAT(lastname, ' ', firstname)"), 'like', '%'.$search.'%');
        }
        return $people->take(100)->get();
    }
}
