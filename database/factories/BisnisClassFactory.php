<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BisnisClass>
 */
class BisnisClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(10);
        return [
            //
                'title' => $title,
                'slug' => Str::slug($title),
                'image' => 'bisnis-class-images/blog'.fake()->numberBetween(1, 4).'.jpg',
                'author' => fake()->word(),
                'desc' => fake()->paragraph(50),
                'status' =>fake()->word(),
                'modelKelas' => fake()->sentence(1),
                'tglPelaksanaan' => date('d-m-y h:i:s', strtotime('+3 days')),
                'pemateri' => fake()->sentence(1),
                'published_at' => now(),
        ];
    }
}
