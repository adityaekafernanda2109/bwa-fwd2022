<?php

namespace Database\Seeders;

use App\Models\MasterData\Specialist;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialist = [
            [
                'name' => 'Dermatology',
                'price' => '250000',
                'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Dentist',
                'price' => '240000',
                'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Endodontics',
                'price' => '350000',
                'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],


        ];
        
        Specialist::insert($specialist);
    }
}
