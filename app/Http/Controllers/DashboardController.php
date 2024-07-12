<?php

namespace App\Http\Controllers;

use App\Models\ServiceTypeProposal;
use App\Models\TukangProposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function indexCustomer(){
        return view('dashboardCustomer');
    }

    public function indexTukang(){
        return view('dashboardTukang');
    }

    public function indexAdmin(){
        $tukangApprovals = TukangProposal::all();
        $serviceTypesApprovals = ServiceTypeProposal::all();
        return view('dashboardAdmin')->with([
            'ProposalTukangs' => $tukangApprovals,
            'ProposalServiceTypes' => $serviceTypesApprovals
        ]);
    }

    public function logoutCustomer(Request $request){
        Auth::guard('customer')->logout();
        $request->session()->forget('guard');
        return redirect()->route('customer.login.index');
    }

    public function logoutTukang(Request $request){
        Auth::guard('tukang')->logout();
        $request->session()->forget('guard');
        return redirect()->route('tukang.login.index');
    }

    public function logoutAdmin(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->forget('guard');
        return redirect()->route('admin.login.index');
    }
}
