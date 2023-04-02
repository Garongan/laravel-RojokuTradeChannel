@extends('user.layout.main')
@section('content')

    {{-- innner banner --}}

    <section class="inner-banner py-5">
        <div class="py-lg-5">
            <div class="container-fluid pt-4 pb-sm-4">
                <h1 class="display-3 mb-3 text-body">{{ $detail }}{{ $title }}</h1>
                <div class="d-flex justify-content-center info-carousel">
                    <h6 class="m-0">
                        <a class="text-primary" href="/">Home</a>
                    </h6>
                    <h6 class="m-0 px-3 text-body">/</h6>
                    <h6 class="m-0">
                        <a href="/news" class="text-body">{{ $detail }}</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    
    {{-- /inner banner --}}

    <!-- berita -->
    <div class="container-fluid py-5 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('/storage/'.$news->image) }}" alt="{{ $news->role }}">
                    <h4 class="text-muted mb-3">{{ $news->role }}</h4>
                    <h1 class="text-uppercase mb-4">
                        {{ $news->title }}
                    </h1>

                    <p style="white-space: pre-wrap;">{{ $news->desc }}</p>
                </div>
                <!-- Blog Detail End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="title-style text-uppercase mb-4">Recent <span>Post</span></h3>
                    <div class="bg-secondary rounded shadow p-4">
                        @foreach ($related as $item)
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{ asset('/storage/'.$item->image) }}" style="width: 100px; height: 100px; object-fit: cover;" alt="{{ $item->role }}">
                            <a href="/news-detail/{{ $item->title }}" class="h6 d-flex align-items-center bg-body text-uppercase px-3 mb-0">
                                {{ Str::limit($item->title, 30) }}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Recent Post End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- /berita -->

@endsection