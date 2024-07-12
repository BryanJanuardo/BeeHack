<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Tukang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function indexRegister(){
        return view('registerCustomer');
    }

    public function indexLogin(){
        return view('loginCustomer');
    }

    public function login(Request $request){
        $validate = $request->validate([
            'Email' => 'required|string|min:10|max:30',
            'Password' => 'required|string|min:8|max:30',
        ]);

        $credentials = [
            'Email' => $validate['Email'],
            'Password' => Hash::make($validate['Password']),
        ];

        if(Auth::guard('customer')->attempt(['Email' => $credentials['Email'], 'Password' => $credentials['Password']])){
            $customer = Customer::where('Email', $credentials['Email'])->first();
            Auth::login($customer);
            $request->session()->put('guard', 'customer');

            return redirect()->route('customer.dashboard.index');
        }

        return redirect()->route('customer.login.index');
    }

    public function register(Request $request){
        $validate = $request->validate([
            'Nama' => 'required|string|min:5|max:30',
            'Umur' => 'required|integer',
            'Email' => 'required|string|email|min:10|max:30',
            'Gender' => 'required|in:Male,Female',
            'Password' => 'required|string|min:8|max:30',
            'ConfirmPassword' => 'required|string|min:8|max:30',
            'NomorTelepon' => 'required|string|min:5|max:20',
            'Alamat' => 'required|string|',
            // 'CV_path' => 'required|string',
            // 'Photo_path' => 'required|string',
            'Deskripsi' => 'required|string',
        ]);

        if($request->Password !== $request->ConfirmPassword){
            return redirect()->back()->withErrors(['ConfirmPassword' => 'Confirm Password and Password do not match!'])->withInput();
        }

        $customer = Customer::create([
            'Nama' => $validate['Nama'],
            'Umur' => $validate['Umur'],
            'Email' => $validate['Email'],
            'Password' => Hash::make($validate['Password']),
            'Gender' => $validate['Gender'],
            'NomorTelepon' => $validate['NomorTelepon'],
            'Alamat' => $validate['Alamat'],
            'Photo_path' => $validate['Deskripsi'],
        ]);

        $credentials = [
            'Email' => $validate['Email'],
            'Password' => Hash::make($validate['Password']),
        ];

        if(Auth::guard('customer')->attempt(['Email' => $credentials['Email'], 'Password' => $credentials['Password']])){
            $customer = Customer::where('Email', $credentials['Email'])->first();
            Auth::login($customer);
            $request->session()->put('guard', 'customer');

            return redirect()->route('customer.dashboard.index');
        }

        return redirect()->route('customer.login.index');
    }

}
