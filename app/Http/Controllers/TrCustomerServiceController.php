<?php

namespace App\Http\Controllers;

use App\Models\TrCustomerService;
use Illuminate\Http\Request;

class TrCustomerServiceController extends Controller
{
    //
    public function show() {
        $CustomerService = TrCustomerService::all();
        return view('serviceDetail')->with([
            'ListTrCS' => $CustomerService,
        ]);
    }
}
