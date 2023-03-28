<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use SebastianBergmann\CodeCoverage\BranchAndPathCoverageNotSupportedException;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
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
                'name' => fake()->word(),
                'brand' => fake()->sentence(3),
                'harga' => '150000',
                'kategori_id' => fake()->numberBetween(1, 3),
                'img_name1' => 's'.fake()->numberBetween(1, 8),
                'img_name2' => 's'.fake()->numberBetween(1, 8),
                'img_name3' => 's'.fake()->numberBetween(1, 8),
                'img_name4' => 's'.fake()->numberBetween(1, 8),
                'spec' => fake()->text(100),
                'desc' => fake()->text(100),
                'published_at' => now(),
                
        ];
    }
}
