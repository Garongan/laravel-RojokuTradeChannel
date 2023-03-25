@extends('layout.main')
@section('content')

    {{-- innner banner --}}

    @include('components.inner_banner')
    
    {{-- /inner banner --}}

    <!-- berita -->
    <div class="container-fluid py-5 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="assets/images/b1.jpg" alt="">
                    <h1 class="text-uppercase mb-4">
                        Diam dolor duo ipsum clita sed lorem tempor. Clita kasd diam justo diam
                        lorem sed amet sed rebum eos.
                    </h1>

                    <p style="white-space: pre-wrap;">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Id harum illo veniam tempora pariatur maiores dolorem qui modi. Perspiciatis voluptatem similique dolor nostrum magni consequatur blanditiis aliquid quibusdam eveniet molestias?.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda cupiditate eveniet dolorum, iusto ad quam excepturi, in voluptates cumque odio laboriosam optio incidunt. Sunt eum adipisci aliquid sapiente iusto animi?.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas hic minima atque cupiditate quis, quasi, ut, corporis natus molestias inventore incidunt consectetur magnam sit? Nemo quo corrupti nostrum molestias est.
                    </p>
                </div>
                <!-- Blog Detail End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Recent Post</h3>
                    <div class="bg-secon rounded shadow p-4">
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="assets/images/b1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Lorem ipsum dolor sit amet consec adipis
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="assets/images/b2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Lorem ipsum dolor sit amet consec adipis
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="assets/images/b3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Lorem ipsum dolor sit amet consec adipis
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="assets/images/b4.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Lorem ipsum dolor sit amet consec adipis
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="assets/images/b1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Lorem ipsum dolor sit amet consec adipis
                            </a>
                        </div>
                        <div class="d-flex">
                            <img class="img-fluid" src="assets/images/b2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Lorem ipsum dolor sit amet consec adipis
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- /berita -->

@endsection