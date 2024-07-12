<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrOrderService extends Model
{
    use HasFactory;
    protected $table = 'TrOrderService';
    protected $primaryKey = 'OrderID';
    protected $fillable = [
        'Nama',
        'Email',
        'Umur',
        'Nomor Telepon',
        'Gender',
        'Photo_path'
    ];

    public function Customer() {
        return $this->belongsTo(Customer::class, 'CustomerID', 'CustomerID');
    }
}
