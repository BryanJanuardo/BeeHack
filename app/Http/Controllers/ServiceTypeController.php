<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use App\Models\ServiceTypeProposal;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function store($id, $action){
        $servicetype = ServiceTypeProposal::where('ServiceTypeApprovalID', $id)->first();

        if($action == 'Accepted'){
            $servicetype->update([
                'Status' => 'Accepted'
            ]);

            ServiceType::create([
                'ServiceNama' => $servicetype->NamaService,
                'DeskripsiService' => $servicetype->Deskripsi,
            ]);
        }else if($action == 'Rejected'){
            $servicetype->update([
                'Status' => 'Rejected'
            ]);
        }
        return redirect()->route('admin.dashboard.index');
    }
}
