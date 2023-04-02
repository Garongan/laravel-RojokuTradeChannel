<?php

use App\Http\Controllers\AdminNewsController;
use App\Models\News;
use App\Models\Produk;
use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminProdukController;

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
Route::get('/', function (Produk $produk, Kategori $kategori, News $news) {
    return view(
        'user/home',
        [
            "title" => "Home",
            "produk" => Produk::latest()->limit(8)->get(),
            "kategori" => Kategori::all(),
            "news" => News::latest()->limit(8)->get(),
        ]
    );
});

// home end

// about

Route::get('/tentang-kami', function () {
    return view(
        'user/about',
        [
            "title" => "Tentang Kami",
            "detail" => "",
        ]
    );
});

// about end

// product

Route::resource('/produk', ProdukController::class);

// product end

// news
Route::resource('/news', NewsController::class);
// news end

// cara kerja

Route::get('/cara-kerja', function () {
    return view(
        'user/cara_kerja',
        [
            "title" => "Cara Kerja",
            "detail" => "",
        ]
    );
});

// cara kerja end

// partner

Route::get('/partner', function () {
    return view(
        'user/partner',
        [
            "title" => "Partner",
            "detail" => "",
        ]
    );
});

// partner end

// contact

Route::get('/contact-us', function () {
    return view(
        'user/contact',
        [
            "title" => "Contact Us",
            "detail" => "",
        ]
    );
});

// contact end


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

// news
Route::resource('/admin/news', AdminNewsController::class)->middleware('auth');
// news end

// admin end
