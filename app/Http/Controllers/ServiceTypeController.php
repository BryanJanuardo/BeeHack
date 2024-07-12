<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    //
    public function show(){
        $serviceType = ServiceType::all();
        return view('newService')->with([
            'ListST' => $serviceType,
        ]);
    }

    public function store(Request $request){

        $validate = $request->validate([
            'ServiceNama' => 'required|string|min:5|max:30',
            'DeskripsiService' => 'required|string|min:5|max:50',
        ]);

        $serviceType = ServiceType::create([
            'ServiceNama' => $validate['ServiceNama'],
            'DeskripsiService' => $validate['DeskripsiService'],
        ]);

        return redirect()->back()->with('success', 'New service type created succesfully.');
    }
}
