<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class CustomerHistoryController extends Controller
{
    public function index()
    {
        $transactions = auth()->user()->transactions()->with('details.product')->get();

        return view('customer.history', compact('transactions'));
    }
}
