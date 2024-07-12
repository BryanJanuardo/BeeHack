<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tukang extends Model
{
    use HasFactory;
    protected $table = "Tukang";
    protected $primaryKey = "TukangID";
    protected $fillable = [
        'Nama',
        'Umur',
        'Email',
        'Gender',
        'NomorTelepon',
        'Address',
        'CV_path',
        'Photo_path',
        'Description',
    ];

    public function customerService() {
        return $this->hasMany(TrCustomerService::class, 'TukangID', 'TukangID');
    }
}
