@extends('user.layout.main')
@section('content')

     <!-- inner banner -->
     @include('user.components.inner_banner')
     <!-- //inner banner -->

    <section class="py-5">
        <div class="w3l-news container py-lg-5 py-md-4 py-2">
            <!-- news -->
            <div class="row border border-1 rounded shadow">
                <div class="row mx-auto">
                    <div class="col">
                        <h3 class="title-style text-center my-5">ALL <span>INFORMASI KELAS BISNIS</span></h3>
                    </div>
                </div>
                <div class="row mx-auto">
                    <!-- news header -->
                    <div class="col-10 mx-auto mb-5">
                        <div class="search-product">
                            <form action="/informasi-bisnis-class.">
                                @csrf
                                <div class="input-group">
                                    <input type="search" id="search-bisnis-class" name="search-bisnis-class" class="fs-6 form-control" class="form-control" placeholder="Ketik Bussines Class Title" value="{{ request('search-bisnis-class') }}">
                                    <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3ZM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8Z"/></svg></button>
                                </div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /news header -->
                    <!-- news -->
                    <div class="container">
                        <ul class="row row-cols-1 row-cols-lg-3 row-gap-3">

                            @foreach ($bisnisClass as $item)
                            <li class="col content">
                                <div class="grids5-info shadow rounded">
                                    <a href="/bisnis-class/{{ $item->slug }}" class="blog-image d-block zoom"><img loading="lazy" src="{{ asset('/storage/'.$item->image) }}"
                                            alt="{{ $item->title }}" class="img-fluid news-image" />
                                    </a>
                                    <div class="blog-info card-body blog-details">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a class="post">{{ $item->author }}</a>
                                            <h6 class="date">{{ $item->published_at }}</h6>
                                        </div>
                
                                        <h4 class="mt-3">{{ Str::limit($item->title, 30) }}</h4>
                                        <p class="mt-3">{{ Str::limit($item->desc, 60) }}</p>
                                            <a href="/bisnis-class/{{ $item->slug }}" class="d-flex mt-3 text-decoration-underline">
                                                Lihat Informasi
                                            </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                        <div class="d-flex justify-content-center my-4">
                            {{ $bisnisClass->links() }}
                        </div>
                    </div>
                    <!-- /procuk -->
                </div>
            </div>
            <!-- /news -->
        </div>
    </section>
    
@endsection