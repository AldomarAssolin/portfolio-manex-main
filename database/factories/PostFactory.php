<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . uniqid(),
            'excerpt' => $this->faker->text(120),
            'content' => $this->faker->paragraphs(5, true),
            'status' => $this->faker->randomElement(['draft', 'published']),
            // Gera imagens fake de 800x400
            'image' => 'https://picsum.photos/seed/' . uniqid() . '/800/400',
        ];
    }
}

