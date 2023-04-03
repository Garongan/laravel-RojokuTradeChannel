@extends('admin.layout.admin_main')
@section('content')
    <!-- section admin update news body -->
    <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-12 mx-auto">
                <div class="bg-body tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Edit News</h2>
                    </div>
                  </div>

                  {{-- input --}}
                  <form action="/admin/news/{{ $news->slug }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row rounded">
                        <div class="col-md-6 col-12">
                          {{-- title news --}}
                          <div class="form-group mb-3">
                            <label for="title">News Title</label>
                            <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Ketik News Title..." autofocus value="{{ $news->title }}"/>
                            @error('title')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- title news end --}}

                          {{-- role news --}}
                          <div class="form-group mb-3">
                            <label for="role" >Role</label>
                            <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                              @if ($news->role == 'Berita')
                                  <option value="{{ $news->role }}" selected>{{ $news->role }}</option>
                                  <option value="Pengumuman">Pengumuman</option>
                              @else
                                <option value="{{ $news->role }}" selected>{{ $news->role }}</option>
                                <option value="Berita">Berita</option>
                              @endif
                            </select>
                            @error('role')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- role news end --}}

                          {{-- desc --}}
                          <div class="form-group mb-3">
                            <label for="desc">Description</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" rows="5">{{ $news->desc }}</textarea>
                            @error('desc')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                          </div>
                          {{-- desc end --}}

                        </div>

                        {{-- img name --}}
                        <div class="col-md-6 col-12 mt-3">
                            <div class="mx-auto">
                              <div class="row row-gap-3">

                                {{-- img 1 --}}
                                <div class="tm-product-img-edit col-12">
                                  <input type="hidden" name="oldImage1" value="{{ $news->image }}">
                                  <img src="{{ asset('/storage/'.$news->image) }}" class="img-fluid" id="dummyImg1">
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
                    <button type="submit" name="submit" class="mt-3 btn btn-primary btn-block text-uppercase">Update News</button>
                  </form>
                  {{-- input end --}}

                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- /section admin update news body -->
@endsection