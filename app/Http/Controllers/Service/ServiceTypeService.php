<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class ServiceTypeService extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function GetAllServiceType()
    {
        $data = ServiceType::orderBy('servicenama', 'asc')->get();
        return response()->json([

            'status' => true,
            'message' => 'Service data founded',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function InsertServiceType(Request $request){
        if(!$request){
            return response()->json([
                'status' => false,
                'message' => 'Service Type Not Found'
            ]);
        }

        try {
            $validatedData = $request->validate([
                'ServiceNama' => 'required|string|min:5|max:30',
                'DeskripsiService' => 'required|string|min:5|max:50'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation errors',
                'errors' => $e->errors()
            ], 400);
        }
        
        ServiceType::create($validatedData);
        return response()->json([
            'status' => true,
            'message' => 'Success inputed service type with API'
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
    public function UpdateServiceType(Request $request, string $id)
    {
        $dataServiceTypeService = ServiceType::find($id);
        if(empty($dataServiceTypeService)){
            return response()->json([
                'status' => false,
                'message' => "Service Type isn't found"
            ], 404);
        }

        $rules = [
            'ServiceNama' => 'required|string',
            'DeskripsiService' => 'required|string'
        ];

        try {
            $validatedData = $request->validate($rules);
        } catch (ValidationException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Validation errors',
                'errors' => $e->errors()
            ], 400);
        }

        $dataServiceTypeService->update($validatedData);

        return response()->json([
            'status' => true,
            'message' => 'Successfully updated data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function DeleteServiceType(string $id)
    {
        $dataServiceTypeService = ServiceType::find($id);

        if(empty($dataServiceTypeService)) {
            return response()->json([
                'status' => false,
                'message' => "Data isn't found"
            ], 404);
        }

        $post = $dataServiceTypeService->delete();

        return response()->json([
            'status' => true,
            'message' => 'Successfully deleted data'
        ]);
    }
}
