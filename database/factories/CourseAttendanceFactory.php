<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseAttendance>
 */
class CourseAttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schedule_id' => \App\Models\Schedule::factory(),
            'student_id' => \App\Models\User::factory(),
            'attendance_code' => $this->faker->randomElement(['A1', 'A2', 'A3', 'A4', 'A5', 'A6']),
            'academic_year' => $this->faker->randomElement(['2020/2023', '2023/2024', '2024/2025']),
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'meeting' => $this->faker->randomElement(['1', '2', '3', '5', '6']),
            'status' => $this->faker->randomElement(['Hadir', 'Tidak Hadir']),
            'information' => $this->faker->randomElement(['Sakit', 'Ijin', 'Tanpa Keterangan']),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'score'=> $this->faker->randomElement(['60', '70', '80', '90', '100']),
            'created_by' => $this->faker->randomElement(['1', '2', '3']),
            'updated_by' => $this->faker->randomElement(['1', '2', '3']),
        ];
    }
}
