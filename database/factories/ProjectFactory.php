<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'link' => $this->faker->url,
            'status' => $this->faker->randomElement(['draft', 'published']),
            'image' => null,
            'created_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'image' => 'https://picsum.photos/seed/' . uniqid() . '/800/400',
        ];
    }
}
