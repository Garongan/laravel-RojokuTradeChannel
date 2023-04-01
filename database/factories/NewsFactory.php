<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
                'title' => fake()->sentence(10),
                'role' => fake()->randomElement(['Berita', 'Pengumuman']),
                'image' => 'news-images/b'.fake()->numberBetween(1, 4).'.jpg',
                'desc' => fake()->paragraph(100),
                'published_at' => now(),
        ];
    }
}
