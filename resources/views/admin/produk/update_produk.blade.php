@extends('admin.layout.admin_main')
@section('content')
    <!-- section admin update produk body -->
    <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-12 mx-auto">
                <div class="bg-body tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Edit Product</h2>
                    </div>
                  </div>
                  <form action="/admin/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    <div class="row">
                        @csrf
                        <div class="col-md-6 col-12">
                          <div class="form-group mb-3">
                            <label for="name">Product Name</label>
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" required autofocus value="{{ $produk->name }}"/>
                            @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                            <label for="brand">Product Brand</label>
                            <input class="form-control @error('brand') is-invalid @enderror" type="text" name="brand" id="brand"  required value="{{ $produk->brand }}" />
                            @error('brand')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                            <label for="harga">Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" placeholder="Ketika Harga Produk..." required value="{{ $produk->harga }}" />
                            @error('harga')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                            <label for="kategori_id" >Category</label>
                            <select class="form-select @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id">
                              <option value="{{ $produk->kategori_id }}" selected>{{ $produk->kategori->name }}</option>
                              @foreach ($kategori as $item)
                                @if ($item->id != $produk->kategori_id)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endif
                              @endforeach
                            </select>
                            @error('kategori_id')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                            <label for="desc">Description</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" rows="5" required>{{ $produk->desc }}</textarea>
                            @error('desc')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                            <label for="spec">Specification</label>
                            <textarea class="form-control @error('spec') is-invalid @enderror" name="spec" id="spec" rows="5" required>{{ $produk->spec }}</textarea>
                            @error('spec')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                        </div>
                        {{-- img name --}}
                        <div class="col-md-6 col-12 mt-3">
                          <div class="mx-auto">
                            <div class="row row-gap-3">

                              {{-- img 1 --}}
                              <div class="tm-product-img-edit col-12">
                                <input type="hidden" name="oldImage1" value="{{ $produk->img_name1 }}">
                                <img src="{{ asset('/storage/'.$produk->img_name1) }}" class="img-fluid" id="dummyImg1">
                                <img class="img-preview1 img-fluid mb-3 pb-3">
                                <input id="img_name1" name="img_name1" class="form-control @error('img_name1') is-invalid @enderror" type="file" onchange="previewImage1()"/>
                                @error('img_name1')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              {{-- /img 1 --}}

                              {{-- img 2 --}}
                              <div class="tm-product-img-edit col-12 col-md-4">
                                <input type="hidden" name="oldImage2" value="{{ $produk->img_name2 }}">
                                <img src="{{ asset('/storage/'.$produk->img_name2) }}" class="img-fluid" id="dummyImg2">
                                <img class="img-preview2 img-fluid mb-3 pb-3">
                                <input id="img_name2" name="img_name2" class="form-control @error('img_name2') is-invalid @enderror" type="file" onchange="previewImage2()"/>
                                @error('img_name2')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              {{-- /img 2 --}}

                              {{-- img 3 --}}
                              <div class="tm-product-img-edit col-12 col-md-4">
                                <input type="hidden" name="oldImage3" value="{{ $produk->img_name3 }}">
                                <img src="{{ asset('/storage/'.$produk->img_name3) }}" class="img-fluid" id="dummyImg3">
                                <img class="img-preview3 img-fluid mb-3 pb-3">
                                <input id="img_name3" name="img_name3" class="form-control @error('img_name3') is-invalid @enderror" type="file" onchange="previewImage3()"/>
                                @error('img_name3')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              {{-- /img 3 --}}
                              
                              {{-- img 4 --}}
                              <div class="tm-product-img-edit col-12 col-md-4">
                                <input type="hidden" name="oldImage4" value="{{ $produk->img_name4 }}">
                                <img src="{{ asset('/storage/'.$produk->img_name4) }}" class="img-fluid" id="dummyImg4">
                                <img class="img-preview4 img-fluid mb-3 pb-3">
                                <input id="img_name4" name="img_name4" class="form-control @error('img_name4') is-invalid @enderror" type="file" onchange="previewImage4()"/>
                                @error('img_name4')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              {{-- /img 4 --}}

                            </div>
                          </div>
                        </div>
                        {{-- /img name --}}
                    </div>
                    <button type="submit" name="submit" class="mt-3 btn btn-primary btn-block text-uppercase">Update Product</button>
                  </form>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin update produk body -->
@endsection