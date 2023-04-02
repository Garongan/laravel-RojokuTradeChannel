@extends('user.layout.main')
@section('content')

     <!-- inner banner -->
     @include('user.components.inner_banner')
     <!-- //inner banner -->

    <section class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <!-- news -->
            <div class="row border border-1 rounded shadow">
                <div class="row mx-auto">
                    <div class="col">
                        <h3 class="title-style text-center my-5">ALL <span>NEWS</span></h3>
                    </div>
                </div>
                <div class="row mx-auto">
                    <!-- news header -->
                    <div class="col-10 mx-auto mb-5">
                        <div class="search-product">
                            <form action="/news">
                                @csrf
                                <div class="input-group">
                                    <input type="search" id="search-news" name="search-news" class="fs-6 form-control" class="form-control" placeholder="Ketik News Title" value="{{ request('search-news') }}">
                                    <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3ZM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8Z"/></svg></button>
                                </div>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /news header -->
                    <!-- news -->
                    <div class="container">
                        <ul class="row row-cols-1 row-cols-lg-3">
                            @foreach ($news as $item)
                                
                            <li class="col">
                                <div class="card mb-3 border-0">
                                    <div class="row row-cols-1">
                                    <div class="col">
                                        <img src="{{ asset('/storage/'.$item->image) }}" class="img-fluid p-3" alt="berita & pengumuman">
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <p class="card-text"><small class="text-muted">{{ $item->role }}</small></p>
                                            <h5 class="card-title">{{ Str::limit($item->title, 30) }}</h5>
                                            <p class="card-text">{{ Str::excerpt($item->desc) }}</p>
                                            <a href="/news/{{ $item->slug }}" class="btn button-primary d-flex mt-3">
                                                Lihat
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </li>
        
                            @endforeach
                        </ul>
                        <div class="d-flex justify-content-center mb-4">
                            {{ $news->links() }}
                        </div>
                    </div>
                    <!-- /procuk -->
                </div>
            </div>
            <!-- /news -->
        </div>
    </section>
    
@endsection