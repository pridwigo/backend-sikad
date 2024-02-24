<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Khs>
 */
class KhsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->foreignId('course_id')->constrained('courses');
        //     $table->foreignId('student_id')->constrained('users');
        //     $table->string('score');
        //     $table->string('grade');
        //     $table->string('information')->nullable();
        //     $table->string('academic_year');
        //     $table->string('semester');
        return [
            'course_id' => \App\Models\Course::factory(),
            'student_id' => \App\Models\User::factory(),
            'score' => $this->faker->randomElement(['60', '70', '80', '90', '100']),
            'grade' => $this->faker->randomElement(['E', 'D', 'C', 'B', 'A']),
            'information' => $this->faker->randomElement(['Lulus', 'Tidak Lulus']),
            'semester' => $this->faker->randomElement(['Ganjil', 'Genap']),
            'academic_year' => $this->faker->randomElement(['2020/2023', '2023/2024', '2024/2025']),
            'created_by' => $this->faker->randomElement(['1', '2', '3']),
            'updated_by' => $this->faker->randomElement(['1', '2', '3']),
        ];
    }
}
