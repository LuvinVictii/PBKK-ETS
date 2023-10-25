<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        $doctors = [
            [
                'name' => 'Akmal Ariq',
                'specialization' => 'Gigi',
            ],
            [
                'name' => 'Dewangga Dika',
                'specialization' => 'THT',
            ],
        ];
    }
}
