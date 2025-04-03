<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary>
 */
class DiaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(3),
            "body" => $this->faker->sentence(7),
            "date" => $this->faker->date,
            "priority" => $this->faker->randomElement(['low', 'medium', 'high']) // konkrētas 
        ];
    }
}
