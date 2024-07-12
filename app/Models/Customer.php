<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'Customer';
    protected $primaryKey = 'CustomerID';
    protected $fillable = [
        'Nama',
        'Email',
        'Password',
        'Umur',
        'NomorTelepon',
        'Gender',
        'Alamat',
        'Photo_path'
    ];

    public function TrOrderService() {
        return $this->hasMany(TrOrderService::class, 'CustomerID', 'CustomerID');
    }
}
