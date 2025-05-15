<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technician = new Technician();
        $technician->document = 2255353;
        $technician->name = 'Alba Rotte';
        $technician->speciality = 'Plomería';
        $technician->document = '2255353';
        $technician->save();
    }
}
