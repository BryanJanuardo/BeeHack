<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Tukang;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TukangService extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tukang::orderBy('nama', 'asc')->get();
        return response()->json([

            'status' => true,
            'message' => 'Data founded',
            'data' => $data
        ], 200);
    }

    public function store(Request $request){
        if(!$request){
            return response()->json([
                'status' => false,
                'message' => 'User Not Found'
            ]);
        }

        try {
            $validatedData = $request->validate([
                'Nama' => 'required|string',
                'Umur' => 'required|integer',
                'Email' => 'required|string|email',
                'Gender' => 'required|in:Male,Female',
                'NomorTelepon' => 'required|string',
                'Address' => 'required|string',
                'CV_path' => 'required|string',
                'Photo_path' => 'required|string',
                'Description' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation errors',
                'errors' => $e->errors()
            ], 400);
        }
        
        Tukang::create($validatedData);
        return response()->json([
            'status' => true,
            'message' => 'Success inputed data not api'
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
