@extends('admin.layout.admin_main')
@section('content')
    <!-- section admin create news body -->
    <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-12 mx-auto">
                <div class="bg-body tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Create Bussines Class</h2>
                    </div>
                  </div>

                  {{-- input --}}
                  <form action="/admin/bisnis-class" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row rounded">
                        <div class="col-md-6 col-12">
                          {{-- title news --}}
                          <div class="form-group mb-3">
                            <label for="title">Bussines Class Title</label>
                            <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Ketik Bussines Class Title..." autofocus value="{{ old('title') }}"/>
                            @error('title')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- title news end --}}

                          {{-- author news --}}
                          <div class="form-group mb-3">
                            <label for="author" >Author</label>
                            <input id="author" name="author" type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Ketik Author Name..." autofocus value="{{ old('author') }}"/>
                            @error('author')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- role news end --}}

                          {{-- desc --}}
                          <div class="form-group mb-3">
                            <label for="desc">Description</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" placeholder="Ketika Deskripsi Bisnis Class..." rows="5" > {{ old('desc') }}</textarea>
                            @error('desc')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- desc end --}}

                          {{-- status --}}
                          <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <input id="status" name="status" type="text" class="form-control @error('status') is-invalid @enderror" placeholder="Ketik Bussines Class Status..." autofocus value="{{ old('status') }}"/>
                            @error('status')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- status end --}}

                          {{-- model kelas --}}
                          <div class="form-group mb-3">
                            <label for="modelKelas">Model Kelas</label>
                            <input id="modelKelas" name="modelKelas" type="text" class="form-control @error('modelKelas') is-invalid @enderror" placeholder="Ketik Bussines Class Model Kelas..." autofocus value="{{ old('modelKelas') }}"/>
                            @error('modelKelas')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- model kelas end --}}

                          {{-- tgl pelaksanaan --}}
                          <div class="form-group mb-3">
                            <label for="tglPelaksanaan">Tanggal Pelaksanaan</label>
                            <input id="tglPelaksanaan" name="tglPelaksanaan" type="datetime-local" class="form-control @error('tglPelaksanaan') is-invalid @enderror" min="2023-01-01T00:00" autofocus value="{{ old('tglPelaksanaan') }}"/>
                            @error('tglPelaksanaan')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- tgl pelaksanaan end --}}

                          {{-- pemateri --}}
                          <div class="form-group mb-3">
                            <label for="pemateri">Pemateri</label>
                            <input id="pemateri" name="pemateri" type="text" class="form-control @error('pemateri') is-invalid @enderror" placeholder="Ketik Bussines Class Pemateri..." autofocus value="{{ old('pemateri') }}"/>
                            @error('pemateri')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- pemateri end --}}

                        </div>

                        {{-- img name --}}
                        <div class="col-md-6 col-12 mt-3">
                            <div class="mx-auto">
                              <div class="row row-gap-3">

                                {{-- image --}}
                                <div class="col-12">
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
                                </div>
                                {{-- /image --}}

                              </div>
                            </div>
                        </div>
                        {{-- /img name --}}

                    </div>
                    <button type="submit" name="submit" class="mt-3 btn btn-primary btn-block text-uppercase">Create News</button>
                  </form>
                  {{-- input end --}}

                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin create news body -->
@endsection