<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrCustomerService extends Model
{
    use HasFactory;
    protected $table = 'TrCustomerService';
    protected $primaryKey = 'CustomerServiceID';
    protected $fillable = [
        'TukangID',
        'ServiceID',
        'DeskripsiCustomerService',
        'Price',
    ];

    public function tukang() {
        return $this->hasMany(Tukang::class, 'TukangID', 'TukangID');
    }

    public function serviceType() {
        return $this->hasMany(ServiceType::class, 'ServiceID', 'ServiceID');
    }
}