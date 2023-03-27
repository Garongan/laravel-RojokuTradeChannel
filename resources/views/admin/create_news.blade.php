@extends('admin.layout.admin_main')
@section('content')
     <!-- section admin create produk body -->
     <section class="py-5">
        <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="tm-block-title d-inline-block">Create News</h2>
                    </div>
                  </div>
                  <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                      <form action="/admin/dashboard" class="tm-edit-product-form">
                        <div class="form-group mb-3">
                          <label for="title-news">Title News</label>
                          <input id="title-news" name="title-news" type="text" class="form-control" placeholder="Ketik Judul Berita/Pengumuman..." required/>
                        </div>
                        <div class="form-group mb-3">
                          <label for="deskripsi-berita">Description</label>
                          <textarea class="form-control" name="deskripsi-berita" id="deskripsi-berita" placeholder="Ketika Deskripsi Berita/Pengumuman..." rows="16" required></textarea>
                        </div>
                        
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mt-4">
                      <div class="tm-product-img-dummy mx-auto" style="height: 240px">
                        <i class="tm-upload-icon" onclick="document.getElementById('fileInput').click();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M11 20H6.5q-2.275 0-3.888-1.575T1 14.575q0-1.95 1.175-3.475T5.25 9.15q.625-2.3 2.5-3.725T12 4q2.925 0 4.963 2.038T19 11q1.725.2 2.863 1.488T23 15.5q0 1.875-1.313 3.188T18.5 20H13v-7.15l1.6 1.55L16 13l-4-4l-4 4l1.4 1.4l1.6-1.55V20Z"/></svg>
                        </i>
                      </div>
                      <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" type="file" style="display:none;" />
                        <input
                          type="button"
                          class="btn btn-primary btn-block mx-auto"
                          value="UPLOAD IMAGE"
                          onclick="document.getElementById('fileInput').click();"
                        />
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <button type="submit" class="btn btn-primary btn-block text-uppercase">Create News</button>
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