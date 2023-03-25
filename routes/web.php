<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// home
Route::get('/', function () {
    return view(
        'user/home',
        [
            "title" => "Home"
        ]
    );
});

// home end

// about

Route::get('/about', function () {
    return view(
        'user/about',
        [
            "title" => "Tentang Kami"
        ]
    );
});

// about end

// product

Route::get('/product', function () {
    return view(
        'user/product',
        [
            "title" => "Produk"
        ]
    );
});

// product end

// cara kerja

Route::get('/cara-kerja', function () {
    return view(
        'user/cara_kerja',
        [
            "title" => "Cara Kerja"
        ]
    );
});

// cara kerja end

// partner

Route::get('/partner', function () {
    return view(
        'user/partner',
        [
            "title" => "Partner"
        ]
    );
});

// partner end

// contact

Route::get('/contact', function () {
    return view(
        'user/contact',
        [
            "title" => "Contact Us"
        ]
    );
});

// contact end

Route::get('/admin/tambah-pelanggan', function () {
    return view(
        'admin/tambah_pelanggan',
        [
            "title" => "Tambah Pelanggan"
        ]
    );
});
