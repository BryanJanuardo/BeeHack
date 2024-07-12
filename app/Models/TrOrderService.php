<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrOrderService extends Model
{
    use HasFactory;
    protected $table = 'tr_order_service';
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

    public function TrCustomerService() {
        return $this->belongsTo(TrCustomerService::class, 'CustomerServiceID', 'CustomerServiceID');
    }
}
