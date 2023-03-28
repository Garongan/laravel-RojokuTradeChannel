@extends('admin.layout.admin_main')
@section('content')
    <!-- section admin update produk body -->
    <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Edit Product</h2>
                    </div>
                  </div>
                  <div class="row tm-edit-product-row">
                    <div class="col-md-6 col-12">
                      <form action="/admin/produk/{{ $produk->id }}" class="tm-edit-product-form" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group mb-3">
                          <label for="name">Product Name</label>
                          <input id="name" name="name" type="text" class="form-control @error('name')
                              is-invalid
                          @enderror" required autofocus value="{{ $produk->name }}"/>
                          @error('name')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group mb-3">
                          <label for="brand">Product Brand</label>
                          <input class="form-control" type="text" name="brand" id="brand"  required value="{{ $produk->brand }}" />
                        </div>
                        <div class="form-group mb-3">
                          <label for="brand">Harga</label>
                          <input class="form-control" type="text" name="harga" id="harga" placeholder="Ketika Harga Produk..." required value="{{ $produk->harga }}" />
                        </div>
                        <div class="form-group mb-3">
                          <label for="kategori" >Category</label>
                          <select class="form-select" id="kategori_id" name="kategori_id">
                            <option value="{{ $produk->kategori_id }}" selected>{{ $produk->kategori->name }}</option>
                            @foreach ($kategori as $item)
                              @if ($item->id != $produk->kategori_id)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group mb-3">
                          <label for="desc">Description</label>
                          <textarea class="form-control" name="desc" id="desc" rows="5" required>{{ $produk->desc }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                          <label for="spec">Specification</label>
                          <textarea class="form-control" name="spec" id="spec" rows="5" required>{{ $produk->spec }}</textarea>
                        </div>
                        </div>

                        {{-- img name --}}
                        <div class="col-md-6 col-12 mt-3">
                          <div class="mx-auto">
                            <div class="row row-gap-3">

                              {{-- img 1 --}}
                              <div class="tm-product-img-edit col-12">
                                <img src="/assets/images/{{ $produk->img_name1 }}.jpg" alt="Product image" class="img-fluid d-block mx-auto mb-3">
                                <input id="fileInput1" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 1 --}}

                              {{-- img 2 --}}
                              <div class="tm-product-img-edit col-12 col-md-4">
                                <img src="/assets/images/{{ $produk->img_name2 }}.jpg" alt="Product image" class="img-fluid d-block mx-auto mb-3">
                                <input id="fileInput2" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 2 --}}

                              {{-- img 3 --}}
                              <div class="tm-product-img-edit col-12 col-md-4">
                                <img src="/assets/images/{{ $produk->img_name3 }}.jpg" alt="Product image" class="img-fluid d-block mx-auto mb-3">
                                <input id="fileInput3" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 3 --}}
                              
                              {{-- img 4 --}}
                              <div class="tm-product-img-edit col-12 col-md-4">
                                <img src="/assets/images/{{ $produk->img_name4 }}.jpg" alt="Product image" class="img-fluid d-block mx-auto mb-3">
                                <input id="fileInput4" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 4 --}}

                            </div>
                          </div>
                        </div>
                        {{-- /img name --}}

                        <div class="col-12 mt-3">
                          <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Product</button>
                        </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin update produk body -->
@endsection