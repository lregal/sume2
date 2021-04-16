<?php

namespace App\Http\Controllers\Resources;

use App\Models\Resources\CollectiveAgreement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectiveAgreementController extends Controller
{
    public function index()
    {
        return CollectiveAgreement
            ::orderBy('name')
            ->get();
    }
}
