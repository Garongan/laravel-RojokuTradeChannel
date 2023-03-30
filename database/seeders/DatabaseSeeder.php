<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin')
        ]);

        Produk::factory(8)->create();

        Kategori::create([
            'name' => 'Elektronik Stuff',
            'image' => 'kategori-images/kategori1.jpg',
            'slug' => 'elektronik-stuff'
        ]);

        Kategori::create([
            'name' => 'Women Style',
            'image' => 'kategori-images/kategori2.jpg',
            'slug' => 'women-style'
        ]);

        Kategori::create([
            'name' => 'Men Stuff Style',
            'image' => 'kategori-images/kategori3.jpg',
            'slug' => 'men-stuff-style'
        ]);

        // $brand = 'Mostly';
        // $time = now();
        // $order = 1;

        // Produk::factory()->create([
        //     'name' => 'Kaos TRIP',
        //     'brand' => $brand,
        //     'harga' => '15000000',
        //     'kategori' => 'Baju BAIK',
        //     'img_name' => 's1',
        //     'spec' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.',
        //     'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.',
        //     'published_at' => $time,
        //     'id' => 'ROJ'.$brand.$order++
        // ]);


    }
}
