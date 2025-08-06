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
            'imagem' => 'https://picsum.photos/seed/' . uniqid() . '/800/400',
            'status' => $this->faker->randomElement(['draft', 'published']),
            'link' => $this->faker->url,
            'created_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
