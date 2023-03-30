<?php

use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Models\Kategori;
use App\Models\Produk;
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
Route::get('/', function (Produk $produk, Kategori $kategori) {
    return view(
        'user/home',
        [
            "title" => "Home",
            "produk" => Produk::latest()->limit(8)->get(),
            "kategori" => Kategori::all()
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

Route::resource('/produk', ProdukController::class);

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

Route::get('/product-detail/{produk:name}', [ProdukController::class, 'show']);

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

Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin', [LoginController::class, 'authenticate'] );
Route::post('/logout', [LoginController::class, 'logout'] );

// login end

// dashboard

Route::get('/admin/dashboard', function(Produk $produk, Kategori $kategori) {
    return view(
        'admin/dashboard',
        [
            "title" => "Dashboard",
            "produk" => $produk::all(),
            "kategori" => $kategori::all()
        ]
    );
})->middleware('auth');

// dashboard end

// produk

Route::resource('/admin/produk', AdminProdukController::class)->middleware('auth');
// produk end

// create info bisnis

Route::get('/admin/create-info-bisnis', function () {
    return view(
        'admin/create_info_bisnis',
        [
            "title" => "Create Informasi Bisnis"
        ]
    );
})->middleware('auth');

// create info bisnis end

// create produk

Route::get('/admin/create-produk', [ProdukController::class, 'create'])->middleware('auth');

// create produk end

// create produk

Route::get('/admin/create-news', function () {
    return view(
        'admin/create_news',
        [
            "title" => "Create News"
        ]
    );
})->middleware('auth');

// create produk end

// update informasi bisnis

Route::get('/admin/update-info-bisnis', function () {
    return view(
        'admin/update_info_bisnis',
        [
            "title" => "Edit Informasi Bisnis"
        ]
    );
})->middleware('auth');

// update informasi bisnis end

// update news

Route::get('/admin/update-news', function () {
    return view(
        'admin/update_news',
        [
            "title" => "Edit News"
        ]
    );
})->middleware('auth');

// update informasi bisnis end

// update produk

Route::get('/admin/update-produk', function () {
    return view(
        'admin/update_produk',
        [
            "title" => "Edit Produk"
        ]
    );
})->middleware('auth');

// update produk end

// admin end

Route::get('/admin/tambah-pelanggan', function () {
    return view(
        'admin/tambah_pelanggan',
        [
            "title" => "Tambah Pelanggan"
        ]
    );
})->middleware('auth');
