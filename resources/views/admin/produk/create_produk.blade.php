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
                      @if (session()->has('success'))
                          <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                          </div>
                      @endif
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
                          <input class="form-control" type="text" name="brand" id="brand" placeholder="Ketika Brand Produk..." rows="10" required value="{{ old('brand') }}" />
                        </div>
                        <div class="form-group mb-3">
                          <label for="brand">Harga</label>
                          <input class="form-control" type="text" name="harga" id="harga" placeholder="Ketika Harga Produk..." rows="10" required value="{{ old('harga') }}" />
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
                    <div class="col-xl-6 col-lg-6 col-md-12 mt-4">
                      <div class="mx-auto">
                        <div class="row gap-3">

                          {{-- img 1 --}}
                          <div class="tm-product-img-dummy col-12" style="height: 240px">
                            <i class="tm-upload-icon" onclick="document.getElementById('fileInput1').click();">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20H6.5q-2.275 0-3.888-1.575T1 14.575q0-1.95 1.175-3.475T5.25 9.15q.625-2.3 2.5-3.725T12 4q2.925 0 4.963 2.038T19 11q1.725.2 2.863 1.488T23 15.5q0 1.875-1.313 3.188T18.5 20H13v-7.15l1.6 1.55L16 13l-4-4l-4 4l1.4 1.4l1.6-1.55V20Z"/></svg>
                            </i>
                          </div>
                          {{-- /img 1 --}}

                          {{-- img 2 --}}
                          <div class="tm-product-img-dummy col" style="height: 80px">
                            <i class="tm-upload-icon" onclick="document.getElementById('fileInput2').click();">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20H6.5q-2.275 0-3.888-1.575T1 14.575q0-1.95 1.175-3.475T5.25 9.15q.625-2.3 2.5-3.725T12 4q2.925 0 4.963 2.038T19 11q1.725.2 2.863 1.488T23 15.5q0 1.875-1.313 3.188T18.5 20H13v-7.15l1.6 1.55L16 13l-4-4l-4 4l1.4 1.4l1.6-1.55V20Z"/></svg>
                            </i>
                          </div>
                          {{-- /img 2 --}}

                          {{-- img 3 --}}
                          <div class="tm-product-img-dummy col">
                            <i class="tm-upload-icon" onclick="document.getElementById('fileInput3').click();">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20H6.5q-2.275 0-3.888-1.575T1 14.575q0-1.95 1.175-3.475T5.25 9.15q.625-2.3 2.5-3.725T12 4q2.925 0 4.963 2.038T19 11q1.725.2 2.863 1.488T23 15.5q0 1.875-1.313 3.188T18.5 20H13v-7.15l1.6 1.55L16 13l-4-4l-4 4l1.4 1.4l1.6-1.55V20Z"/></svg>
                            </i>
                          </div>
                          {{-- /img 3 --}}
                          
                          {{-- img 4 --}}
                          <div class="tm-product-img-dummy col">
                            <i class="tm-upload-icon" onclick="document.getElementById('fileInput4').click();">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20H6.5q-2.275 0-3.888-1.575T1 14.575q0-1.95 1.175-3.475T5.25 9.15q.625-2.3 2.5-3.725T12 4q2.925 0 4.963 2.038T19 11q1.725.2 2.863 1.488T23 15.5q0 1.875-1.313 3.188T18.5 20H13v-7.15l1.6 1.55L16 13l-4-4l-4 4l1.4 1.4l1.6-1.55V20Z"/></svg>
                            </i>
                          </div>
                          {{-- /img 4 --}}

                        </div>
                      </div>
                      <div class="custom-file mt-3 mb-3">
                        <input id="fileInput1" type="file" accept=".jpg" style="display:none;" />
                        <input id="fileInput2" type="file" accept=".jpg" style="display:none;" />
                        <input id="fileInput3" type="file" accept=".jpg" style="display:none;" />
                        <input id="fileInput4" type="file" accept=".jpg" style="display:none;" />
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