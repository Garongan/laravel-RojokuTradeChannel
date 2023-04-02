<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $name = fake()->word();
        return [
            //
                'name' => $name,
                'slug' => Str::slug($name),
                'brand' => fake()->sentence(3),
                'harga' => fake()->numberBetween(50000, 1000000),
                'kategori_id' => fake()->numberBetween(1, 3),
                'img_name1' => 'produk-images/s'.fake()->numberBetween(1, 8).'.jpg',
                'img_name2' => 'produk-images/s'.fake()->numberBetween(1, 8).'.jpg',
                'img_name3' => 'produk-images/s'.fake()->numberBetween(1, 8).'.jpg',
                'img_name4' => 'produk-images/s'.fake()->numberBetween(1, 8).'.jpg',
                'spec' => fake()->text(100),
                'desc' => fake()->text(100),
                'published_at' => now(),
                
        ];
    }
}
