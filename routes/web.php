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

// user

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

// produk detail

Route::get('/product-detail', function () {
    return view(
        'user/single_product',
        [
            "title" => "Detail"
        ]
    );
});

// detail

// single news detail

Route::get('/news-detail', function () {
    return view(
        'user/single_news',
        [
            "title" => "Detail"
        ]
    );
});

// single news detail

// single bisnis class detail

Route::get('/bussines-class-detail', function () {
    return view(
        'user/single_bisnis_class',
        [
            "title" => "Detail"
        ]
    );
});

// single bisnis class detail end

// user end

// admin

// login

Route::get('/admin', function () {
    return view(
        'admin/login',
        [
            "title" => "Login"
        ]
    );
});

// login end

// dashboard

Route::get('/admin/dashboard', function () {
    return view(
        'admin/dashboard',
        [
            "title" => "Dashboard"
        ]
    );
});

// dashboard end

// create info bisnis

Route::get('/admin/create-info-bisnis', function () {
    return view(
        'admin/create_info_bisnis',
        [
            "title" => "Create Informasi Bisnis"
        ]
    );
});

// create info bisnis end

// create produk

Route::get('/admin/create-produk', function () {
    return view(
        'admin/create_produk',
        [
            "title" => "Create Produk"
        ]
    );
});

// create produk end

// create produk

Route::get('/admin/create-news', function () {
    return view(
        'admin/create_news',
        [
            "title" => "Create News"
        ]
    );
});

// create produk end

// update informasi bisnis

Route::get('/admin/update-info-bisnis', function () {
    return view(
        'admin/update_info_bisnis',
        [
            "title" => "Edit Informasi Bisnis"
        ]
    );
});

// update informasi bisnis end

// update news

Route::get('/admin/update-news', function () {
    return view(
        'admin/update_news',
        [
            "title" => "Edit News"
        ]
    );
});

// update informasi bisnis end

// update produk

Route::get('/admin/update-produk', function () {
    return view(
        'admin/update_produk',
        [
            "title" => "Edit Produk"
        ]
    );
});

// update produk end

// admin end

Route::get('/admin/tambah-pelanggan', function () {
    return view(
        'admin/tambah_pelanggan',
        [
            "title" => "Tambah Pelanggan"
        ]
    );
});
