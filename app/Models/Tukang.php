<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tukang extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;
    protected $table = "Tukang";
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
    ];

    public function CustomerService() {
        return $this->hasMany(TrCustomerService::class, 'TukangID', 'TukangID');
    }
}
