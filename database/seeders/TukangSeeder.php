<?php

namespace Database\Seeders;

use App\Models\Tukang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TukangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('TukangID_ID');
        $genres = ['Female', 'Male'];
        for($i = 0; $i < 5; $i++){
            Tukang::create([
                'Nama' => $faker->name,
                'Umur' => rand(18,60),
                'Email' => $faker->email,
                'Gender' => $genres[rand(0,1)],
                'NomorTelepon' => $faker->phoneNumber,
                'Address' => $faker->address,
                'CV_path' => '123',
                'Photo_path' => '123',
                'Description' => $faker->sentence,
            ]);
        }
    }
}
