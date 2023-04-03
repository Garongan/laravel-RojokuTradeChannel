@extends('admin.layout.admin_main')
@section('content')
    <!-- section admin update news body -->
    <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-auto mx-auto">
                <div class="bg-body tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Edit Kategori</h2>
                    </div>
                  </div>

                  {{-- input --}}
                  <form action="/admin/kategori/{{ $kategori->slug }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    {{-- image --}}
                    <div class="tm-product-img-edit col-12">
                        <input type="hidden" name="oldImage1" value="{{ $kategori->image }}">
                        <img src="{{ asset('/storage/'.$kategori->image) }}" class="img-fluid mb-3 pb-3" id="dummyImg1">
                        <img class="img-preview1 img-fluid mb-3 pb-3">
                        <input id="img_name1" name="image" class="form-control @error('image') is-invalid @enderror" type="file" onchange="previewImage1()"/>
                        @error('image')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                    {{-- /image --}}

                    {{-- name --}}
                    <label for="name" class="form-label mt-3">Masukkan Nama Kategori</label>
                    <input type="text" name="name" id="name" value="{{ $kategori->name }}" placeholder="Kategori Name..." class="form-control mb-3">
                    @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror

                    {{-- name --}}
                    <button type="submit" name="submit" class="mt-3 btn btn-primary btn-block text-uppercase">Update Category</button>
                  </form>
                  {{-- input end --}}

                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin update news body -->
@endsection