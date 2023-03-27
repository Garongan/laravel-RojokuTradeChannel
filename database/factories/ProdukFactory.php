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
        static $order = 1;
        static $brand = 'Motsly';
        return [
            //
                'name' => 'produk '.$order,
                'brand' => $brand,
                'harga' => '150000',
                'kategori_id' => fake()->numberBetween(1, 3),
                'img_name' => 's'.$order++,
                'spec' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.',
                'published_at' => now(),
                
        ];
    }
}
