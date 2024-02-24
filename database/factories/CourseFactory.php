<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_name' => $this->faker->sentence(3),
            'lecturer_id' => \App\Models\User::factory(),
            'semester' => 'Ganjil',
            'academic_year' => '2023/2024',
            'sks' => 3,
            'course_code' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'description' => $this->faker->paragraph(3),
            // 'course_name' => fake()->word(),
            // 'lecturer_id' => 3,
        ];
    }
}
