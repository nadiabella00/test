<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return;
    }

    public function create(Request $request)
    {
        return view('transaction.create');
    }
}
