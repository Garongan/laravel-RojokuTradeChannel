@extends('admin.layout.admin_main')
@section('content')

<!-- admin isi  -->
<section class="py-5">
    <div class="container">
        <div class="row">

            <!-- product -->
            <div class="col-12 col-md-4 text-center">

                <!-- header create produk -->
                <h3 class="title-style mb-3">Product List</h3>
                <!-- /header create produk -->

                <a href="/admin/create-produk">
                    <button type="button" class="btn button-primary mb-3">Create Product</button>
                </a>

                <hr>

                <!-- list produk accordion -->
                <ul class="accordion accordion-flush" id="accordionFlushExample">
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#product-1" aria-expanded="false" aria-controls="product-1">Product 1</button>
                        </h2>
                        <div id="product-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/s1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Produk 1</p>
                                    <p class="mt-1">Harga: xxx.xxx.xxx</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-produk" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#product-2" aria-expanded="false" aria-controls="product-2">Product 2</button>
                        </h2>
                        <div id="product-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/s2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Produk 2</p>
                                    <p class="mt-1">Harga: xxx.xxx.xxx</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-produk" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#product-3" aria-expanded="false" aria-controls="product-3">Product 3</button>
                        </h2>
                        <div id="product-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/s3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Produk 3</p>
                                    <p class="mt-1">Harga: xxx.xxx.xxx</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-produk" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#product-4" aria-expanded="false" aria-controls="product-4">Product 4</button>
                        </h2>
                        <div id="product-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/s4.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Produk 4</p>
                                    <p class="mt-1">Harga: xxx.xxx.xxx</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-produk" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /list produk accordion -->

            </div>
            <!-- /product -->

            <!-- news -->
            <div class="col-12 col-md-4 text-center">

                <!-- header create produk -->
                <h3 class="title-style mb-3">News List</h3>
                <!-- /header create produk -->

                <a href="/admin/create-news">
                    <button type="button" class="btn button-primary mb-3">Create News</button>
                </a>

                <hr>

                <!-- list news accordion -->
                <ul class="accordion accordion-flush" id="accordionFlushExample">
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#news-1" aria-expanded="false" aria-controls="news-1">News 1</button>
                        </h2>
                        <div id="news-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/b1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">News 1</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-news" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#news-2" aria-expanded="false" aria-controls="news-2">News 2</button>
                        </h2>
                        <div id="news-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/b2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">News 2</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-news" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#news-3" aria-expanded="false" aria-controls="news-3">News 3</button>
                        </h2>
                        <div id="news-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/b3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">News 3</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-news" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#news-4" aria-expanded="false" aria-controls="news-4">News 4</button>
                        </h2>
                        <div id="news-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/b4.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">News 4</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-news" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /list news accordion -->

            </div>
            <!-- /news -->

            <!-- informasi bisnis -->
            <div class="col-12 col-md-4 text-center">

                <!-- header create produk -->
                <h3 class="title-style mb-3">Bussines Class List</h3>
                <!-- /header create produk -->

                <a href="/admin/create-info-bisnis">
                    <button type="button" class="btn button-primary mb-3">Create Bussines Class</button>
                </a>

                <hr>

                <!-- list informasi bisnis accordion -->
                <ul class="accordion accordion-flush" id="accordionFlushExample">
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bisnis-info-1" aria-expanded="false" aria-controls="bisnis-info-1">Informasi Bisnis Kelas 1</button>
                        </h2>
                        <div id="bisnis-info-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/blog1.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Kelas Bisnis 1</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-info-bisnis" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bisnis-info-2" aria-expanded="false" aria-controls="bisnis-info-2">Informasi Bisnis Kelas 1</button>
                        </h2>
                        <div id="bisnis-info-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/blog2.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Kelas Bisnis 2</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-info-bisnis" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bisnis-info-3" aria-expanded="false" aria-controls="bisnis-info-3">Informasi Bisnis Kelas 1</button>
                        </h2>
                        <div id="bisnis-info-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/blog3.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Kelas Bisnis 3</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-info-bisnis" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item">
                        <h2 class="accordion-header">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bisnis-info-4" aria-expanded="false" aria-controls="bisnis-info-4">Informasi Bisnis Kelas 4</button>
                        </h2>
                        <div id="bisnis-info-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <img loading="lazy" src="/assets/images/blog4.jpg" class="card-img-top" alt="kategori 1">
                                <div class="text-start">
                                    <p class="mt-3">Kelas Bisnis 4</p>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <a href="/admin/update-info-bisnis" class="w-100 btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="w-100 btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /list informasi bisnis accordion -->

            </div>
            <!-- /informasi bisnis -->

        </div>

        <!-- kategori produk -->

        <h3 class="title-style text-center mt-5 mb-3">Product Category</h3>
        <div class="row mx-1 d-flex justify-content-center gap-3">
            
            <!-- kategori list -->
            <div class="col-1 py-2 button-primary rounded">
                Kategori 1 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 2 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 3 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 4 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 5 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 1 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 2 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 3 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 4 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <div class="col-1 py-2 button-primary rounded">
                Kategori 5 

                <!-- button delete kategori -->
                <button type="button" class="kategori-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.82" viewBox="0 0 1408 1280"><path fill="currentColor" d="M1408 480v192q0 40-28 68t-68 28H96q-40 0-68-28T0 672V480q0-40 28-68t68-28h1216q40 0 68 28t28 68z"/></svg></button>
                <!-- /button delete kategori -->

            </div>
            <!-- /kategori list -->

            <!-- plus kategori -->
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
</section>
<!-- /admin isi -->
    
@endsection