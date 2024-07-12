<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTypeProposal extends Model
{
    use HasFactory;
    protected $table = "service_type_proposal";
    protected $primaryKey = "ServiceTypeApprovalID";
    protected $fillable = [
        'TukangID',
        'NamaService',
        'Deskripsi',
        'Status',
        'ProposedDate',
        'ApprovedDate'
    ];
}
