@extends('admin.layout.admin_main')
@section('content')
<section class="py-5">
  <div class="container">
      <!-- kategori produk -->

      <div class="border-bottom pb-4 mb-3 border-success">
        <div class="row row-cols-1 row-cols-lg-3">

            <!-- title -->
            <div class="col my-auto">
                <div class="text-primary fs-3">Kategori - <span class="text-secondary">All Kategori</span></div>
            </div>
            <!-- title -->

            <!-- filter -->
            <div class="col-12 col-auto col-lg-8">
                <div class="row">
                    <!-- search -->
                    <div class="col col-12">
                        <form action="/admin/kategori">
                            @csrf
                            <label for="search-kategori" class="form-label fs-6">Kategori Name</label>
                            <div class="input-group">
                                <input type="search" id="search-kategori" name="search-kategori" class="fs-6 form-control" class="form-control" placeholder="Search Kategori" value="{{ request('search-kategori') }}">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- filter -->

        </div>
      </div>
      {{-- create button --}}
      <button type="button" data-bs-toggle="modal" data-bs-target="#plusModal" class="btn btn-primary mb-3">
        Create Kategori
      </button>
      {{-- create button end --}}

      @if (session()->has('success'))
          <div class="alert alert-info" role="alert">
              {{ session('success') }}
          </div>
      @endif

      <ul class="row row-cols-1 row-cols-lg-3 mt-3 mb-5 justify-content-start row-gap-2">
        @foreach ($kategori as $item)
            
          <li class="col">
            <div class="card mb-3 border-0 bg-white shadow">
                <div class="row row-cols-1">
                  <div class="col">
                      <img src="{{ asset('/storage/'.$item->image) }}" class="img-fluid p-3" alt="{{ $item->name }}">
                  </div>
                  <div class="col">
                      <div class="card-body">
                          <h5 class="card-title">{{ $item->name }}</h5>

                          {{-- edit --}}
                          <form action="/admin/kategori/{{ $item->slug }}/edit" method="get" class="d-inline">
                            <button class="btn btn-warning">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h8l6 6v4h-2V9h-5V4H6v16h6v2H6Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4.3 4.3H14v-3.175l4.3-4.3Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275t.7.275l1.775 1.775q.275.275.275.7t-.275.7l-1.45 1.45Z"/></svg>
                              Edit
                            </button>
                          </form>
                          {{-- edit end --}}
                          
                          {{-- delete --}}
                          <form action="/admin/kategori/{{ $item->slug }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this kategori?')">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1l1.4 1.4ZM7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM7 6v13V6Z"/></svg>
                              Delete
                            </button>
                          </form>
                          {{-- delete end --}}

                      </div>
                  </div>
                </div>
            </div>
          </li>

        @endforeach

      </ul>
      
      <!-- modal plus kategori -->
      <div class="modal fade" id="plusModal" tabindex="-1" aria-labelledby="plusModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="plusModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/admin/kategori" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="modal-body">
                      {{-- image --}}
                      <div class="tm-product-img-dummy" id="dummyImg1">
                        <div class="tm-upload-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                        </div>
                      </div>
                      <img class="img-preview1 img-fluid mb-3 pb-3">
                      <input id="img_name1" name="image" class="form-control @error('image') is-invalid @enderror" type="file" onchange="previewImage1()" />
                      @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                      {{-- /image --}}
                      <label for="name" class="form-label mt-3">Masukkan Nama Kategori</label>
                      <input type="text" name="name" id="name" placeholder="Kategori Name..." class="form-control mb-3">
                      @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      <!-- /modal plus kategori -->

      <!-- /kategori produk -->
  </div>
</section>
@endsection