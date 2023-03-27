@extends('admin.layout.admin_main')
@section('content')
<section class="py-5">
  <div class="container">
      <div class="row">
          <!-- kategori produk -->

      <h3 class="title-style text-center mt-5 mb-3">Product Category</h3>
      <div class="row mx-1 d-flex justify-content-center gap-3">

          @foreach ($kategori as $item)
          <div class="col-1 py-2 button-primary rounded">
              {{ $item->name }}

              <!-- button delete kategori -->
              <a href="/admin/kategori/{{ $item->id }}" class="kategori-button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg>
              </a>
              <!-- /button delete kategori -->

          </div>
          @endforeach

          <!-- plus kategori -->
          <a href="/produk"></a>
          <div class="col-1 btn button-primary">
              <button type="button" data-bs-toggle="modal" data-bs-target="#plusModal" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1408 1408"><path fill="currentColor" d="M1408 608v192q0 40-28 68t-68 28H896v416q0 40-28 68t-68 28H608q-40 0-68-28t-28-68V896H96q-40 0-68-28T0 800V608q0-40 28-68t68-28h416V96q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"/></svg></button>
          </div>
          <!-- /plus kategori -->
      </div>

      <!-- modal plus kategori -->
      <div class="modal fade" id="plusModal" tabindex="-1" aria-labelledby="plusModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="plusModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="#" method="get">
                  <div class="modal-body">
                      <label for="kategori" class="form-label mb-3">Masukkan Kategori</label>
                      <input type="text" name="kategori" id="kategori" placeholder="Kategori" class="form-control mb-3">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      <!-- /modal plus kategori -->

      <!-- /kategori produk -->
      </div>
  </div>
</section>
@endsection