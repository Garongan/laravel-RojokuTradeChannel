@extends('user.layout.main')
@section('content')

{{-- inner banner --}}
<section class="inner-banner py-5">
    <div class="py-lg-5">
        <div class="container-fluid pt-4">
            <h1 class="display-3 mb-3 pt-sm-5 text-center text-body">{{ $detail }}{{ $title }}</h1>
            <div class="d-flex justify-content-center info-carousel">
                <h6 class="m-0">
                    <a class="text-primary" href="/">Home</a>
                </h6>
                <h6 class="m-0 px-3 text-body">/</h6>
                <h6 class="m-0">
                    <a href="/produk/{{ Str::slug($detail) }}" class="text-body">{{ $detail }}</a>
                </h6>
            </div>
        </div>
    </div>
</section>
{{-- /inner banner --}}

<!-- single produk container -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{ asset('/storage/'.$produk->img_name1) }}" alt="Card image cap" id="product-detail">
                </div>
                <div class="row me-1">
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="m13.3 17.3l-4.6-4.6q-.15-.15-.212-.325T8.425 12q0-.2.063-.375T8.7 11.3l4.6-4.6q.275-.275.7-.275t.7.275q.275.275.275.7t-.275.7L10.8 12l3.9 3.9q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275Z"/></svg>
                        </a>
                    </div>
                    <!--End Controls-->
                    <!--Start Carousel Wrapper-->
                    <div id="multi-item-example" class="col-10 ps-4 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <!--Start Slides-->
                        <div class="carousel-inner product-links-wap" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="{{ asset('/storage/'.$produk->img_name2) }}" alt="Product Image 1"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="{{ asset('/storage/'.$produk->img_name3) }}" alt="Product Image 1"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="{{ asset('/storage/'.$produk->img_name4) }}" alt="Product Image 1"></a>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="{{ asset('/storage/'.$produk->img_name2) }}" alt="Product Image 1"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="{{ asset('/storage/'.$produk->img_name3) }}" alt="Product Image 1"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="{{ asset('/storage/'.$produk->img_name4) }}" alt="Product Image 1"></a>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->
                        </div>
                        <!--End Slides-->
                    </div>
                    <!--End Carousel Wrapper-->
                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M8.7 17.3q-.275-.275-.275-.7t.275-.7l3.9-3.9l-3.9-3.9q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275Z"/></svg>
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{ $produk->name }}</h1>
                        <p class="h3 py-2">Harga: <?php echo 'Rp' . number_format($produk->harga); ?></p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Brand:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>{{ $produk->brand }}</strong></p>
                            </li>
                        </ul>

                        <h6 class="mt-3">Kategori:</h6>
                        <p>{{ $produk->kategori->name }}</p>

                        <h6 class="mt-3">Description:</h6>
                        <p>{{ $produk->desc }}</p>

                        <h6 class="mt-3">Specification:</h6>
                        <p class="pb-3">
                            {{ $produk->spec }}
                        </p>
                        
                        <a href="https://www.whatsapp.com/">
                            <button type="button" class="btn button-primary fs-4 my-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="30" height="30.24" viewBox="0 0 256 258"><defs><linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1FAF38"/><stop offset="100%" stop-color="#60D669"/></linearGradient><linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#F9F9F9"/><stop offset="100%" stop-color="#FFF"/></linearGradient></defs><path fill="url(#logosWhatsappIcon0)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a122.994 122.994 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#logosWhatsappIcon1)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416Zm40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513l10.706-39.082Z"/><path fill="#FFF" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561c0 15.67 11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716c-3.186-1.593-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/></svg>
                                Order Now
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /single produk container -->

<!-- Start Article -->
<section class="py-5">
    <div class="container">
        <h3 class="title-style text-left p-2 pb-4">Related <span>Products</span></h3>
        <div class="row mx-auto carousel">
            <!-- realated list -->
            <div class="col-12">
                <ul class="container gap-3 d-flex hide-scrollbar flex-nowrap row flex-row rounded" id="isi-produk" style="overflow-x: scroll;">
                    @foreach ($related as $item)

                    <li class="col-4 col-md-4 col-lg-3 col-xl-3">
                        <img loading="lazy" src="{{ asset('/storage/'.$item->img_name1) }}" class="card-img-top" alt="{{ $item->name }}">
                        <div class="card-body">
                        <p class="card-title">{{ $item->name }}</p>
                        <p class="card-subtitle">Harga: <?php echo 'Rp' . number_format($produk->harga); ?></p>
                        <a href="/product-detail/{{ $item->name }}" class="btn button-primary d-flex" data-bs-toggle="modal" data-bs-target="#produkModal">
                            Lihat
                        </a>
                        </div>
                    </li>

                    @endforeach
                </ul>
            </div>
            <!-- /related list -->
            
        </div>
    </div>
</section>
<!-- End Article -->

<!-- produck deteil -->
<script src="/assets/js/produk-detail.js"></script>
<!-- /produk detail -->
    
@endsection