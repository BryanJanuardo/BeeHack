<?php

namespace App\Http\Controllers;

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
        return view('dashboardAdmin');
    }

    public function logoutCustomer(Request $request){
        Auth::guard('customer')->logout();
        $request->session()->forget('guard');
        return redirect()->route('customer.login');
    }

    public function logoutTukang(Request $request){
        Auth::guard('tukang')->logout();
        $request->session()->forget('guard');
        return redirect()->route('tukang.login');
    }

    public function logoutAdmin(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->forget('guard');
        return redirect()->route('admin.login');
    }
}
