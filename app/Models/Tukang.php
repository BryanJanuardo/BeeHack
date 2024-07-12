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
        'Alamat',
        'CV_path',
        'Photo_path',
        'Deskripsi',
    ];

    public function CustomerService() {
        return $this->hasMany(TrCustomerService::class, 'TukangID', 'TukangID');
    }
}
