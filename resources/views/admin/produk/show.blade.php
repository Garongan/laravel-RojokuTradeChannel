@extends('admin.layout.admin_main')
@section('content')
    <!-- single produk container -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-12">
                    <a href="/admin/produk" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10.875 19.3l-6.6-6.6q-.15-.15-.213-.325T4 12q0-.2.063-.375t.212-.325l6.6-6.6q.275-.275.688-.287t.712.287q.3.275.313.688T12.3 6.1L7.4 11h11.175q.425 0 .713.288t.287.712q0 .425-.287.713t-.713.287H7.4l4.9 4.9q.275.275.288.7t-.288.7q-.275.3-.7.3t-.725-.3Z"/></svg>
                        Back to Produk List
                    </a>
                    <a href="/admin/{{ $produk->id }}/edit" class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h8l6 6v4h-2V9h-5V4H6v16h6v2H6Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4.3 4.3H14v-3.175l4.3-4.3Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275t.7.275l1.775 1.775q.275.275.275.7t-.275.7l-1.45 1.45Z"/></svg>
                        Edit
                    </a>
                    <form action="/admin/produk/{{ $produk->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this product?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1l1.4 1.4ZM7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM7 6v13V6Z"/></svg>
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="/assets/images/{{ $produk->img_name }}.jpg" alt="Card image cap" id="product-detail">
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
                                        <a href="#"><img class="produk-img img-fluid col-4" src="/assets/images/s1.jpg" alt="Product Image 1"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="/assets/images/s2.jpg" alt="Product Image 1"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="/assets/images/s3.jpg" alt="Product Image 1"></a>
                                    </div>
                                </div>
                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="/assets/images/s4.jpg" alt="Product Image 2"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="/assets/images/s5.jpg" alt="Product Image 2"></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img class="produk-img img-fluid col-4" src="/assets/images/s6.jpg" alt="Product Image 2"></a>
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
@endsection