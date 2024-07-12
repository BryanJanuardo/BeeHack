<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;
    protected $table = 'admin';
    protected $primaryKey = 'AdminID';
    protected $fillable = [
        'Nama',
        'Email',
        'Password',
    ];

    use HasFactory;
}
