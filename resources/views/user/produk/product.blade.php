@extends('user.layout.main')
@section('content')

     <!-- inner banner -->
     @include('user.components.inner_banner')
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
                        <ul class="container d-flex hide-scrollbar flex-nowrap row flex-row rounded"   style="overflow-x: scroll;">
                            <li class="kategori-list" style="width: 10rem;">
                                <form action="/produk">
                                    @csrf
                                    <input type="hidden" name="kategori" id="kategori" value="0">
                                    <button type="submit" class="border-0">
                                        <img loading="lazy" src="{{ asset('/storage/kategori-images/kategori_all.jpg') }}" class="card-img-top mt-3" alt="all produk">
                                        <div class="card-body">
                                            <p class="card-text">All Produk</p>
                                        </div>
                                    </button>
                                </form>
                            </li>
                            @foreach ($kategori as $item)
                            <li class="kategori-list" style="width: 10rem;">
                                <form action="/produk">
                                    @csrf
                                    <input type="hidden" name="kategori" id="kategori" value="{{ $item->id }}">
                                    <button type="submit" class="border-0">
                                        <img loading="lazy" src="{{ asset('/storage/'.$item->image) }}" class="card-img-top mt-3" alt="kategori {{ $item->name }}">
                                        <div class="card-body">
                                            <p class="card-text">{{ $item->name }}</p>
                                        </div>
                                    </button>
                                </form>
                            </li>
                            @endforeach
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
                                <form action="/produk">
                                    @csrf
                                    <div class="input-group">
                                        <input type="search" id="search-produk" name="search-produk" class="fs-6 form-control" class="form-control" placeholder="Ketik Name Produk" value="{{ request('search-produk') }}">
                                        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3ZM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8Z"/></svg></button>
                                    </div>
                                    </button>
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
                                        <form action="/produk">
                                            <div class="input-group w-75 py-1">
                                                <select class="form-select" name="orderPrice">
                                                    @if (request('orderPrice') == 'lowToHigh')
                                                        <option value="nothing">Nothing</option>
                                                        <option value="lowToHigh" selected>Low Price → High Price</option>
                                                    @else
                                                        <option value="nothing" selected>Nothing</option>
                                                        <option value="lowToHigh">Low Price → High Price</option>
                                                    @endif
                                                </select>
                                                <input type="submit" class="btn btn-primary" value="Select">
                                            </div>
                                        </form>
                                        </div>
                                    <p class="py-2">Showing all {{ count($produk) }} results</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /shop header -->
                    <!-- produck -->
                    <div class="container">
                        <ul class="tab-content row mt-5 justify-content-start">
                            @foreach ($produk as $item)
                            <li class="col-12 col-md-4">
                                <img loading="lazy" src="{{ asset('/storage/'.$item->img_name1) }}" class="card-img-top" alt="Product image {{ $item->name }}">
                                <div class="card-body">
                                <p>{{ $item->name }}</p>
                                <p>Kategori: {{ $item->kategori->name }}</p>
                                <p>Harga: <?php echo 'Rp' . number_format($item['harga']); ?></p>
                                <a href="/produk/{{ $item->slug }}" class="btn button-primary d-flex mt-3">
                                    Lihat
                                </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="d-flex justify-content-center mb-4">
                            {{ $produk->links() }}
                        </div>
                    </div>
                    <!-- /procuk -->
                </div>
            </div>
            <!-- /produk -->
        </div>
    </section>
    <!-- /produk -->
@endsection