<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'Customer';
    protected $primaryKey = 'CustomerID';
    protected $fillable = [
        'Nama',
        'Email',
        'Umur',
        'NomorTelepon',
        'Gender',
        'Photo_path'
    ];

    public function TrOrderService() {
        return $this->hasMany(TrOrderService::class, 'CustomerID', 'CustomerID');
    }
}
