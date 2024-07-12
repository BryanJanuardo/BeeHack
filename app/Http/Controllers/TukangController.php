<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TukangController extends Controller
{
    public function store(Request $request){

        $validate = $request->validate([
            'Nama' => 'required|string',
            'Umur' => 'required|integer',
            'Email' => 'required|string|email',
            'Gender'=> 'required|in:Male,Female',
            'NomorTelepon' => 'required|string',
            'Alamat' => 'required|string',
            // 'CV_path' => 'required|string',
            // 'Photo_path' => 'required|string',
            'Deskripsi' => 'required|string',
        ]);

        $tukang = Tukang::create([
            'Nama' => $validate['Nama'],
            'Umur' => $validate['Umur'],
            'Email' => $validate['Email'],
            'Gender' => $validate['Gender'],
            'NomorTelepon' => $validate['NomorTelepon'],
            'Alamat' => $validate['Alamat'],
            'CV_path' => 'tes',
            'Photo_path' => 'tes',
            // 'CV_path' => $validate['CV_path'],
            // 'Photo_path' => $validate['Photo_path'],
            'Deskripsi' => $validate['Deskripsi']
        ]);

        return redirect()->back()->with('Success', 'Tukang created succesfully.');
    }
}
