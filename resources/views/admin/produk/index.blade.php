@extends('admin.layout.admin_main')
@section('content')

<!-- admin isi  -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="border-bottom pb-4 mb-3 border-success">
                            <div class="row row-cols-1 row-cols-lg-3">
            
                                <!-- title -->
                                <div class="col my-auto">
                                    <div class="text-primary fs-3">Produk - <span class="text-secondary">All Produk</span></div>
                                </div>
                                <!-- title -->
            
                                <!-- filter -->
                                <div class="col-12 col-auto col-lg-8">
                                    <div class="row">
                                        <!-- search -->
                                        <div class="col col-12 col-md-4">
                                            <form action="">
                                                <div class="form-label fs-6">Produk Name</div>
                                                <input type="search" name="search-produk" class="fs-6 form-control form-control-lg form-control-sm rounded" onkeyup="searchProduct()" class="form-control" id="search-produk" placeholder="Search Produk">
                                            </form>
                                        </div>
                                        {{-- kategori --}}
                                        <div class="col">
                                            <div class="form-label fs-6">Kategori</div>
                                            <select class="form-control-lg form-select fs-6">
                                                <option value="0">All Produk</option>
                                                @foreach ($kategori as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- /kateogori --}}
                                    </div>
                                </div>
                                <!-- filter -->
            
                            </div>
                        </div>
                        {{-- create button --}}
                        <a href="/admin/produk/create" class="btn button-primary mb-3">
                            Create Produk
                        </a>
                        {{-- create button end --}}

                        @if (session()->has('success'))
                            <div class="alert alert-info" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody id="produk-list-dashboard">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Img</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Brand</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product Category</th>
                                        <th scope="col">Product Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($produk as $item)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <!-- img thumbnail -->
                                        <td>
                                            <img src="/assets/images/{{ $item->img_name1 }}.jpg" class="img-thumbnail p-0" alt="" style="max-height: 50px">
                                        </td>
                                        <!-- /img thumbnail -->

                                        <!-- produk title -->
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <!-- /produk title -->

                                        {{-- produk brand --}}
                                        <td>
                                            {{ $item->brand }}
                                        </td>
                                        {{-- /produk brand --}}

                                        {{-- produk harga --}}
                                        <td>
                                            <?php echo 'Rp' . number_format($item['harga']); ?>
                                        </td>
                                        {{-- /produk harga --}}

                                        {{-- produk kategori --}}
                                        <td>
                                            {{ $item->kategori->name }}
                                        </td>
                                        {{-- /produk kategori --}}

                                        {{-- action --}}

                                        <td>
                                            {{-- view --}}
                                            <a href="/admin/produk/{{ $item->id }}" class="badge bg-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path fill="currentColor" d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z"/><path fill="currentColor" d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z"/></svg>
                                            </a>
                                            {{-- view end --}}

                                            {{-- edit --}}
                                            <form action="/admin/produk/{{ $item->id }}/edit" method="get" class="d-inline">
                                                <button class="btn badge bg-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h8l6 6v4h-2V9h-5V4H6v16h6v2H6Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4.3 4.3H14v-3.175l4.3-4.3Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275t.7.275l1.775 1.775q.275.275.275.7t-.275.7l-1.45 1.45Z"/></svg>
                                                </button>
                                            </form>
                                            {{-- edit end --}}

                                            {{-- delete --}}
                                            <form action="/admin/produk/{{ $item->id }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn badge bg-danger border-0" onclick="return confirm('Are you sure to delete this product?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1l1.4 1.4ZM7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM7 6v13V6Z"/></svg>
                                                </button>
                                            </form>
                                            {{-- delete end --}}

                                        </td>
                                        {{-- /action --}}

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div id="pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div>
</section>
<!-- /admin isi -->
    
@endsection