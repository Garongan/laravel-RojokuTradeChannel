<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BisnisClass;
use App\Models\News;
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

        Kategori::create([
            'name' => 'Elektronik Stuff',
            'image' => 'images/category-elektronik.jpg',
            'slug' => 'elektronik-stuff'
        ]);

        Kategori::create([
            'name' => 'Women Style',
            'image' => 'images/category-woman-style.jpg',
            'slug' => 'women-style'
        ]);

        Kategori::create([
            'name' => 'Men Style',
            'image' => 'images/category-men-style.jpg',
            'slug' => 'men-style'
        ]);

        News::factory(16)->create();
        Produk::factory(16)->create();
        BisnisClass::factory(15)->create();

    }
}
