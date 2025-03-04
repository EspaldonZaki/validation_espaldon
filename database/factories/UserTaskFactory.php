<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
  *@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTask>
 */
class UserTaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_name' => fake()->sentence(),
            'status' => fake()->randomElement(['Pending', 'On Process', 'Completed']),
            'description' => fake()->paragraph(),
            'deadline' => fake()->date('Y-m-d'),
        ];
    }
}
