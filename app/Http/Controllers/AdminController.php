<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function indexLogin(){
        return view('loginAdmin');
    }

    public function login(Request $request){
        $validate = $request->validate([
            'Email' => 'required|string|min:10|max:30',
            'Password' => 'required|string|min:8|max:30',
        ]);

        dd('dawdwa');
        $credentials = [
            'Email' => $validate['Email'],
            'Password' => Hash::make($validate['Password']),
        ];


        if(Auth::guard('admin')->attempt(['Email' => $credentials['Email'], 'Password' => $credentials['Password']])){
            $admin = Admin::where('Email', $credentials['Email'])->first();
            Auth::login($admin);
            $request->session()->put('guard', 'admin');

            return redirect()->route('admin.dashboard.index');
        }


        return redirect()->route('tukang.login.index');
    }
}
