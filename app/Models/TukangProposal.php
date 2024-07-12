<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TukangProposal extends Model
{
    use HasFactory;

    protected $table = "tukang_proposal";
    protected $primaryKey = "TukangID";
    protected $fillable = [
        'Nama',
        'Umur',
        'Email',
        'Password',
        'Gender',
        'NomorTelepon',
        'Alamat',
        'CV_path',
        'Photo_path',
        'Deskripsi',
        'Status',
    ];
}
