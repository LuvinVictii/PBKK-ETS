<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        $patients = [
            [
                'name' => 'Syukra Wahyu',
                'dob' => '1990-01-01',
                'address' => 'Keputih gang 3',
            ],
            [
                'name' => 'Daffa Harits',
                'dob' => '1995-02-15',
                'address' => 'KTB',
            ],
        ];
    }
}
