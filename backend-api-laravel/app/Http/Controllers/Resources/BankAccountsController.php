<?php

namespace App\Http\Controllers\Resources;

use App\Models\Resources\BankAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BankAccountsController extends Controller
{
    public function index()
    {
        return BankAccount
            ::with('bank')
            ->with('person')
            ->orderBy('bank_id')
            ->get();
    }
}
