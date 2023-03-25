@extends('layout.main')
@section('content')

     <!-- inner banner -->
     @include('components.inner_banner')
     <!-- //inner banner -->

    <!-- produk -->
    <section class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <!-- kategori -->
            <div class="row border border-1 rounded shadow">
                <div class="row mx-auto">
                    <h3 class="title-style text-start mb-lg-5 mb-4">PRODUCT <span>CATEGORY</span></h3>
                </div>
                <div class="row mx-auto carousel">
                    <div class="col-auto">
                        <!-- prev -->
                        <button class="mb-5 carousel-control-prev" id="slideLeft">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2Zm8 15H11.85l5.58 5.573L16 24l-8-8l8-8l1.43 1.393L11.85 15H24Z"/><path fill="none" d="m16 8l1.43 1.393L11.85 15H24v2H11.85l5.58 5.573L16 24l-8-8l8-8z"/></svg>
                        </button>
                        <!-- /prev -->
                    </div>
                    <!-- kategori list -->
                    <div class="col-12">
                        <ul class="container d-flex hide-scrollbar flex-nowrap row flex-row rounded" id="isi-kategori" style="overflow-x: scroll;">
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="active border-0 scrollToProduk" onclick="filterSelection('all')">
                                    <img loading="lazy" src="assets/images/s8.jpg" class="card-img-top mt-3" alt="all produk">
                                    <div class="card-body">
                                        <p class="card-text">All Produk</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-1')">
                                    <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top mt-3" alt="kategori 1">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 1</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-2')">
                                    <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top mt-3" alt="kategori 2">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 2</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-3')">
                                    <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top mt-3" alt="kategori 3">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 3</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('all')">
                                    <img loading="lazy" src="assets/images/s8.jpg" class="card-img-top mt-3" alt="all produk">
                                    <div class="card-body">
                                        <p class="card-text">All Produk</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-1')">
                                    <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top mt-3" alt="kategori 1">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 1</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="active border-0 scrollToProduk" onclick="filterSelection('all')">
                                    <img loading="lazy" src="assets/images/s8.jpg" class="card-img-top mt-3" alt="all produk">
                                    <div class="card-body">
                                        <p class="card-text">All Produk</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-1')">
                                    <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top mt-3" alt="kategori 1">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 1</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-2')">
                                    <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top mt-3" alt="kategori 2">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 2</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-3')">
                                    <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top mt-3" alt="kategori 3">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 3</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('all')">
                                    <img loading="lazy" src="assets/images/s8.jpg" class="card-img-top mt-3" alt="all produk">
                                    <div class="card-body">
                                        <p class="card-text">All Produk</p>
                                    </div>
                                </button>
                            </li>
                            <li class="kategori-list" style="width: 10rem;">
                                <button type="button" class="border-0 scrollToProduk" onclick="filterSelection('kategori-1')">
                                    <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top mt-3" alt="kategori 1">
                                    <div class="card-body">
                                        <p class="card-text">Kategori 1</p>
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- /kategori list -->
                    <div class="col-auto">
                        <!-- next -->
                        <button class="mb-5 carousel-control-next me-2" id="slideRight" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M2 16A14 14 0 1 0 16 2A14 14 0 0 0 2 16Zm6-1h12.15l-5.58-5.607L16 8l8 8l-8 8l-1.43-1.427L20.15 17H8Z"/><path fill="none" d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8l-8-8z"/></svg>
                        </button>
                        <!-- /next -->
                    </div>
                </div>
            </div>
            <!-- /kategori -->
            <!-- produk -->
            <div class="row border border-1 rounded shadow mt-3 list-kategori-produk">
                <div class="row mx-auto">
                    <div class="col">
                        <h3 class="title-style text-start mb-lg-5 mb-4">ALL <span>PRODUCT</span></h3>
                    </div>
                </div>
                <div class="row mx-auto">
                    <!-- shop header -->
                    <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="product-categori">
                            <div class="search-product">
                                <form action="#">
                                    <input class="form-control" placeholder="Ketik Nama Produk" type="text">
                                    <button type="submit"> <i class="fa fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12">
                        <div class="right-product-box">
                            <div class="product-item-filter row">
                                <div class="col-12 col-sm-8 text-center text-sm-left">
                                    <div class="toolbar-sorter-right">
                                        <span>Sort by </span>
                                        <select class="form-control">
                                        <option data-display="Select">Nothing</option>
                                        <option value="3">Low Price → High Price</option>
                                        </select>
                                        </div>
                                    <p>Showing all 4 results</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /shop header -->
                    <!-- produck -->
                    <div class="container">
                        <ul class="tab-content row mt-5 justify-content-start">
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-1">
                                <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                <p class="card-title">Produk 1</p>
                                <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-2">
                                <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 2</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-3">
                                <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 3</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-4">
                                <img loading="lazy" src="assets/images/s4.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 4</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-5">
                                <img loading="lazy" src="assets/images/s5.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 5</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-6">
                                <img loading="lazy" src="assets/images/s6.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 6</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-7">
                                <img loading="lazy" src="assets/images/s7.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 7</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-8">
                                <img loading="lazy" src="assets/images/s8.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 8</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-1">
                                <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 1</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-2">
                                <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 2</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-3">
                                <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 3</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-1">
                                <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 1</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-2">
                                <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 2</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-3">
                                <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 3</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-1">
                                <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 1</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-2">
                                <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 2</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-3">
                                <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 3</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-1">
                                <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 1</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-2">
                                <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 2</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-3">
                                <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 3</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-1">
                                <img loading="lazy" src="assets/images/s1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 1</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-2">
                                <img loading="lazy" src="assets/images/s2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 2</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                            <li class="filterDiv col-sm-6 col-md-6 col-lg-4 col-xl-4 kategori-3">
                                <img loading="lazy" src="assets/images/s3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="card-body">
                                    <p class="card-title">Produk 4</p>
                                    <p class="card-subtitle">Harga: xxx.xxx.xxx</p>
                                    <a href="/product-detail" class="btn button-primary d-flex">
                                    Lihat
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /procuk -->
                </div>
            </div>
            <!-- /produk -->
        </div>
    </section>
    <!-- /produk -->
@endsection