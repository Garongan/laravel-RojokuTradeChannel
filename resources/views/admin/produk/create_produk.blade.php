@extends('admin.layout.admin_main')
@section('content')
    <!-- section admin create produk body -->
    <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-12 mx-auto">
                <div class="bg-body tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Create Product</h2>
                    </div>
                  </div>

                  {{-- input --}}
                  <form action="/admin/produk" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row rounded">
                        <div class="col-md-6 col-12">
                          {{-- title produk --}}
                          <div class="form-group mb-3">
                            <label for="name">Product Name</label>
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Ketik Nama Produk..." autofocus value="{{ old('name') }}"/>
                            @error('name')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- title produk end --}}

                          {{-- brand produk --}}
                          <div class="form-group mb-3">
                            <label for="brand">Product Brand</label>
                            <input class="form-control @error('brand') is-invalid @enderror" type="text" name="brand" id="brand" placeholder="Ketika Brand Produk..." value="{{ old('brand') }}" />
                            @error('brand')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- brand produk end --}}

                          {{-- harga produk --}}
                          <div class="form-group mb-3">
                            <label for="harga">Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" placeholder="Ketika Harga Produk..." value="{{ old('harga') }}" />
                            @error('harga')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- harga produk end --}}

                          {{-- kategori --}}
                          <div class="form-group mb-3">
                            <label for="kategori_id" >Category</label>
                            <select class="form-select @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id">
                              @foreach ($kategori as $item)
                                @if (old('kategori_id') == $item->id)
                                  <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                @else
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
                          {{-- kategori end --}}

                          {{-- desc --}}
                          <div class="form-group mb-3">
                            <label for="desc">Description</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" placeholder="Ketika Deskripsi Produk..." rows="5" value="{{ old('desc') }}"></textarea>
                            @error('desc')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- desc end --}}

                          {{-- spec --}}
                          <div class="form-group mb-3">
                            <label for="spec">Specification</label>
                            <textarea class="form-control @error('spec') is-invalid @enderror" name="spec" id="spec" placeholder="Ketika Spesifikasi Produk..." rows="5" value="{{ old('spec') }}"></textarea>
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
                                <div class="col-12">
                                  <div class="tm-product-img-dummy" id="dummyImg1">
                                    <div class="tm-upload-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                    </div>
                                  </div>
                                  <img class="img-preview1 img-fluid mb-3 pb-3">
                                  <input id="img_name1" name="img_name1" class="form-control @error('img_name1') is-invalid @enderror" type="file" onchange="previewImage1()" />
                                  @error('img_name1')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                  @enderror
                                </div>
                                {{-- /img 1 --}}

                                {{-- img 2 --}}
                                <div class="col-12 col-md-4">
                                  <div class="tm-product-img-dummy" id="dummyImg2">
                                    <div class="tm-upload-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                    </div>
                                  </div>
                                  <img class="img-preview2 img-fluid mb-3 pb-3">
                                  <input id="img_name2" name="img_name2" class="form-control @error('img_name2') is-invalid @enderror" type="file" onchange="previewImage2()" />
                                  @error('img_name2')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                  @enderror
                                </div>
                                {{-- /img 2 --}}

                                {{-- img 3 --}}
                                <div class="col-12 col-md-4">
                                  <div class="tm-product-img-dummy" id="dummyImg3">
                                    <div class="tm-upload-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                    </div>
                                  </div>
                                  <img class="img-preview3 img-fluid mb-3 pb-3">
                                  <input id="img_name3" name="img_name3" class="form-control @error('img_name3') is-invalid @enderror" type="file" onchange="previewImage3()" />
                                  @error('img_name3')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                  @enderror
                                </div>
                                {{-- /img 3 --}}
                                
                                {{-- img 4 --}}
                                <div class="col-12 col-md-4">
                                  <div class="tm-product-img-dummy" id="dummyImg4">
                                    <div class="tm-upload-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><g fill="none"><path fill="currentColor" d="M44 24a2 2 0 1 0-4 0h4ZM24 8a2 2 0 1 0 0-4v4Zm15 32H9v4h30v-4ZM8 39V9H4v30h4Zm32-15v15h4V24h-4ZM9 8h15V4H9v4Zm0 32a1 1 0 0 1-1-1H4a5 5 0 0 0 5 5v-4Zm30 4a5 5 0 0 0 5-5h-4a1 1 0 0 1-1 1v4ZM8 9a1 1 0 0 1 1-1V4a5 5 0 0 0-5 5h4Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="m6 35l10.693-9.802a2 2 0 0 1 2.653-.044L32 36m-4-5l4.773-4.773a2 2 0 0 1 2.615-.186L42 31m-5-13V6m-5 5l5-5l5 5"/></g></svg>
                                    </div>
                                  </div>
                                  <img class="img-preview4 img-fluid mb-3 pb-3">
                                  <input id="img_name4" name="img_name4" class="form-control @error('img_name1') is-invalid @enderror" type="file" onchange="previewImage4()" />
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
                    <button type="submit" name="submit" class="mt-3 btn btn-primary btn-block text-uppercase">Create Product</button>
                  </form>
                  {{-- input end --}}

                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin create produk body -->
@endsection