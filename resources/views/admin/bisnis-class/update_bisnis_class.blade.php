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
                      <h2 class="tm-block-title d-inline-block">Edit Bussines Class</h2>
                    </div>
                  </div>

                  {{-- input --}}
                  <form action="/admin/bisnis-class/{{ $bisnisClass->slug }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row rounded">
                        <div class="col-md-6 col-12">
                          {{-- title news --}}
                          <div class="form-group mb-3">
                            <label for="title">Bussines Class Title</label>
                            <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Ketik Bussines Class Title..." autofocus value="{{ $bisnisClass->title }}"/>
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
                            <input id="author" name="author" type="text" class="form-control @error('author') is-invalid @enderror" placeholder="Ketik Author Name..." autofocus value="{{ $bisnisClass->author }}"/>
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
                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" placeholder="Ketika Deskripsi Bisnis Class..." rows="5" > {{ $bisnisClass->desc }}</textarea>
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
                            <input id="status" name="status" type="text" class="form-control @error('status') is-invalid @enderror" placeholder="Ketik Bussines Class Status..." autofocus value="{{ $bisnisClass->status }}"/>
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
                            <input id="modelKelas" name="modelKelas" type="text" class="form-control @error('modelKelas') is-invalid @enderror" placeholder="Ketik Bussines Class Model Kelas..." autofocus value="{{ $bisnisClass->modelKelas }}"/>
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
                            <input id="tglPelaksanaan" name="tglPelaksanaan" type="datetime-local" class="form-control @error('tglPelaksanaan') is-invalid @enderror" min="2023-01-01T00:00" autofocus value="{{ $bisnisClass->tglPelaksanaan }}"/>
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
                            <input id="pemateri" name="pemateri" type="text" class="form-control @error('pemateri') is-invalid @enderror" placeholder="Ketik Bussines Class Pemateri..." autofocus value="{{ $bisnisClass->pemateri }}"/>
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

                                {{-- img 1 --}}
                                <div class="tm-product-img-edit col-12">
                                  <input type="hidden" name="oldImage1" value="{{ $bisnisClass->image }}">
                                  <img src="{{ asset('/storage/'.$bisnisClass->image) }}" class="img-fluid" id="dummyImg1">
                                  <img class="img-preview1 img-fluid mb-3 pb-3">
                                  <input id="img_name1" name="image" class="form-control @error('image') is-invalid @enderror" type="file" onchange="previewImage1()"/>
                                  @error('image')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                                {{-- /img 1 --}}

                              </div>
                            </div>
                        </div>
                        {{-- /img name --}}

                    </div>
                    <button type="submit" name="submit" class="mt-3 btn btn-primary btn-block text-uppercase">Update Bisnis Class</button>
                  </form>
                  {{-- input end --}}

                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin create news body -->
@endsection