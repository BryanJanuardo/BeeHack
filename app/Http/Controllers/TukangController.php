<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use Illuminate\Http\Request;

class TukangController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'Nama' => 'required|string',
            'Umur' => 'required|integer',
            'Email' => 'required|string|email',
            'Gender'=> 'required|in:Male,Female',
            'NomorTelepon' => 'required|string',
            'Address' => 'required|string',
            'CV_path' => 'required|string',
            'Photo_path' => 'required|string',
            'Description' => 'required|text',
        ]);

        Tukang::create($validate);
        return redirect()->back()->with('Success', 'Tukang created succesfully.');
    }
}
