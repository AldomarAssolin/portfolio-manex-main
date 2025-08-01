<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'link' => $this->faker->url,
            'status' => $this->faker->randomElement(['draft', 'published']),
            'image' => null,
            'created_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
