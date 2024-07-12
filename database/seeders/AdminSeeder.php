<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Tukang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'Nama' => 'Bryan Januardo',
            'Email' => 'bryan@admin.com',
            'Password' => Hash::make('1234567890'),
        ]);

        Tukang::create([
            'Nama' => 'Bryan Januardo',
            'Umur' => 12,
            'Email' => 'bryan@tukang.com',
            'Password' => Hash::make('1234567890'),
            'Gender' => 'Female',
            'NomorTelepon' => '0312312313',
            'Alamat' => 'Jakarta Sunda Tenggara',
            'CV_path' => 'Bryan Januarod_CV.pdf',
            'Photo_path' => 'Bryan Januarod_Photo.png'
        ]);

        Customer::create([
            'Nama' => 'Bryan Januardo',
            'Email' => 'bryan@customer.com',
            'Password' => Hash::make('1234567890'),
            'Umur' => 23,
            'NomorTelepon' => '02391831312',
            'Gender' => 'Male',
            'Alamat' => 'Jalan Tenggara Kebun Jeruk',
            'Photo_path' => 'Bryan Januarod_Photo.png'
        ]);
    }
}
