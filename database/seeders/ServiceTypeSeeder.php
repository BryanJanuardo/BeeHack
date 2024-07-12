<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create('ServiceTypeID_id');
        for($i=0; $i<3; $i++){
            ServiceType::create([
                'ServiceNama' => $faker->name,
                'DeskripsiService' => $faker->sentence
            ]);
        }
    }
}
