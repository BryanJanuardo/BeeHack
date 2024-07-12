<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Tukang;
use App\Models\TukangApproval;
use App\Models\TukangProposal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class TukangController extends Controller
{
    public function indexRegister(){
        return view('registerWorker');
    }

    public function indexLogin(){
        return view('loginWorker');
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

        if(Auth::guard('tukang')->attempt(['Email' => $credentials['Email'], 'Password' => $credentials['Password']])){
            $tukang = Tukang::where('Email', $credentials['Email'])->first();
            Auth::login($tukang);
            $request->session()->put('guard', 'tukang');

            return redirect()->route('tukang.dashboard.index');
        }

        return redirect()->route('tukang.login.index');
    }

    public function register(Request $request){
        $validate = $request->validate([
            'Nama' => 'required|string|min:5|max:30',
            'Umur' => 'required|integer',
            'Email' => 'required|string|email|max:30',
            'Gender'=> 'required|in:Male,Female',
            'NomorTelepon' => 'required|string|min:5|max:20',
            'Alamat' => 'required|string|min:10|max:100',
            'Password' => 'required|string|min:8|max:30',
            'ConfirmPassword' => 'required|string|min:8|max:30',
            'CV' => 'required|file|mimes:pdf',
            'Photo' => 'required|file|mimes:jpeg,png,jpg,svg',
            'Deskripsi' => 'required|string|min:20|max:200',
        ]);

        if($request->Password !== $request->ConfirmPassword){
            return redirect()->back()->withErrors(['ConfirmPassword' => 'Confirm Password and Password do not match!'])->withInput();
        }

        $CV_path = '';
        $Photo_path = '';

        if ($request->hasFile('CV')) {
            $extension = $request->file('CV')->getClientOriginalExtension();
            $CVTukang = $validate['Nama'] . '_CV' . '.' . $extension;
            $request->file('CV')->storeAs('public/Tukang/CV', $CVTukang);
            $CV_path = $CVTukang;
        }

        if ($request->hasFile('Photo')) {
            $extension = $request->file('Photo')->getClientOriginalExtension();
            $PhotoTukang = $validate['Nama'] . '_Photo' . '.' . $extension;
            $request->file('Photo')->storeAs('public/Tukang/Photo', $PhotoTukang);
            $Photo_path = $PhotoTukang;
        }

        TukangProposal::create([
            'Nama' => $validate['Nama'],
            'Umur' => $validate['Umur'],
            'Email' => $validate['Email'],
            'Gender' => $validate['Gender'],
            'NomorTelepon' => $validate['NomorTelepon'],
            'Alamat' => $validate['Alamat'],
            'Password' => Hash::make($validate['Password']),
            'CV_path' => $CV_path,
            'Photo_path' => $Photo_path,
            'Deskripsi' => $validate['Deskripsi'],
            'Status' => 'Pending'
        ]);

        return redirect()->back()->with('Success', 'Akun akan dicek oleh Admin!');
    }

    public function store($id, $action){
        $tukangproposal = TukangProposal::where('TukangID', $id)->first();

        if($action == 'Accepted'){
            $tukangproposal->update([
                'Status' => 'Accepted'
            ]);

            Tukang::create([
                'Nama' => $tukangproposal->Nama,
                'Umur' => $tukangproposal->Umur,
                'Email' => $tukangproposal->Email,
                'Gender' => $tukangproposal->Gender,
                'NomorTelepon' => $tukangproposal->NomorTelepon,
                'Alamat' => $tukangproposal->Alamat,
                'Password' => $tukangproposal->Password,
                'CV_path' => $tukangproposal->CV_path,
                'Photo_path' => $tukangproposal->Photo_path,
                'Deskripsi' => $tukangproposal->Deskripsi,
            ]);
        }else if($action == 'Rejected'){
            $tukangproposal->update([
                'Status' => 'Rejected'
            ]);
        }

        // Return redirect ke Admin Home

    }
}
