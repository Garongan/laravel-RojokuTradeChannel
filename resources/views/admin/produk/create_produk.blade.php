@extends('admin.layout.admin_main')
@section('content')
    <!-- section admin create produk body -->
    <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="bg-body tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Create Product</h2>
                    </div>
                  </div>
                  <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                      <form action="/admin/produk" class="tm-edit-product-form" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                          <label for="name">Product Name</label>
                          <input id="name" name="name" type="text" class="form-control @error('name')
                              is-invalid
                          @enderror" placeholder="Ketik Nama Produk..." required autofocus value="{{ old('name') }}"/>
                          @error('name')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group mb-3">
                          <label for="brand">Product Brand</label>
                          <input class="form-control" type="text" name="brand" id="brand" placeholder="Ketika Brand Produk..." required value="{{ old('brand') }}" />
                        </div>
                        <div class="form-group mb-3">
                          <label for="brand">Harga</label>
                          <input class="form-control" type="text" name="harga" id="harga" placeholder="Ketika Harga Produk..." required value="{{ old('harga') }}" />
                        </div>
                        <div class="form-group mb-3">
                          <label for="kategori" >Category</label>
                          <select class="form-select" id="kategori_id" name="kategori_id">
                            @foreach ($kategori as $item)
                              @if (old('kategori_id') == $item->id)
                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                              @else
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group mb-3">
                          <label for="desc">Description</label>
                          <textarea class="form-control" name="desc" id="desc" placeholder="Ketika Deskripsi Produk..." rows="5" value="{{ old('desc') }}" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                          <label for="spec">Specification</label>
                          <textarea class="form-control" name="spec" id="spec" placeholder="Ketika Spesifikasi Produk..." rows="5" value="{{ old('spec') }}" required></textarea>
                        </div>
                        </div>

                        {{-- img name --}}
                        <div class="col-md-6 col-12 mt-3">
                          <div class="mx-auto">
                            <div class="row row-gap-3">

                              {{-- img 1 --}}
                              <div class="col-12">
                                <div class="tm-product-img-dummy mb-3">
                                  <div class="tm-upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                  </div>
                                </div>
                                <input id="fileInput1" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 1 --}}

                              {{-- img 2 --}}
                              <div class="col-12 col-md-4">
                                <div class="tm-product-img-dummy mb-3">
                                  <div class="tm-upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                  </div>
                                </div>
                                <input id="fileInput2" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 2 --}}

                              {{-- img 3 --}}
                              <div class="col-12 col-md-4">
                                <div class="tm-product-img-dummy mb-3">
                                  <div class="tm-upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                  </div>
                                </div>
                                <input id="fileInput3" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 3 --}}
                              
                              {{-- img 4 --}}
                              <div class="col-12 col-md-4">
                                <div class="tm-product-img-dummy mb-3">
                                  <div class="tm-upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                  </div>
                                </div>
                                <input id="fileInput4" class="form-control" type="file" accept=".jpg" />
                              </div>
                              {{-- /img 4 --}}

                            </div>
                          </div>
                        </div>
                        {{-- /img name --}}

                        <div class="col-12 mt-3">
                          <button type="submit" class="btn btn-primary btn-block text-uppercase">Create Product</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin create produk body -->
@endsection