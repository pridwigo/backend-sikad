<?php

namespace Database\Seeders;

use App\Models\AbsenceAttendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsenceAttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AbsenceAttendance::factory(1)->create();
    }
}
