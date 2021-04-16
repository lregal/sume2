<?php

namespace App\Http\Controllers\Companies;


use App\Models\Companies\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    private $m = Company::class;
    private $pk = 'id';

    public function index()
    {
        return Company
            ::with('companyType')
            ->orderBy('name', 'asc')
            ->get();
    }
    public function show($id)
    {
        $companyInfo = Company
            ::where('id', $id)
            ->with('companyType')
            ->with('streetPrefix')
            ->with('files')
            ->with('positions', 'positions.person')
            ->with('positions.company')
            ->with(
                'comments.companyCommentType',
                'comments.user'
            )
            ->with(
                ['comments' => function ($query) {
                    $query->orderBy('created_at', 'desc');
                }],
                'comments.companyCommentType',
                'comments.user'
            )
            ->first();
        return $companyInfo;
    }
}
