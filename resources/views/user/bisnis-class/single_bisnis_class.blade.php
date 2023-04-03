@extends('user.layout.main')
@section('content')

    {{-- inner banner --}}
    <section class="inner-banner py-5">
        <div class="py-lg-5">
            <div class="container-fluid pt-4">
                <h1 class="display-3 mb-3 pt-sm-5 text-center text-body">{{ $detail }}{{ $title }}</h1>
                <div class="d-flex justify-content-center info-carousel">
                    <h6 class="m-0">
                        <a class="text-primary" href="/">Home</a>
                    </h6>
                    <h6 class="m-0 px-3 text-body">/</h6>
                    <h6 class="m-0">
                        <a href="/bisnis-class" class="text-body">{{ $detail }}</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    {{-- inner banner --}}

    <!-- bisnis keals -->
    <div class="container-fluid py-5 px-5">
        <div class="row g-5">
            <div class="col-lg-7">

                <!-- bisnis kelas Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('/storage/'.$bisnisClass->image) }}" alt="{{ $bisnisClass->slug }}">
                    <h1 class="text-uppercase mb-4">
                        {{ $bisnisClass->title }}
                    </h1>
                    <p>{{ $bisnisClass->desc }}</p>
                </div>
                <!-- bisnis kelas detail End -->

            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-5">

                <!-- info join Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4 title-style">Informasi <span>Kelas</span></h3>
                    <div class="bg-secondary rounded shadow p-4">

                        <!-- info klas -->
                        <div class="pb-3">
                            <label class="fst-italic opacity-75">Status</label>
                            <p class="form-control">{{ $bisnisClass->status }}</p>
                            <label class="fst-italic opacity-75 mt-3">Model Kelas</label>
                            <p class="form-control">{{ $bisnisClass->modelKelas }}</p>
                            <label class="fst-italic opacity-75 mt-3">Tanggal Pelaksanaan</label>
                            <p class="form-control">{{ $bisnisClass->tglPelaksanaan }}</p>
                            <label class="fst-italic opacity-75 mt-3">Pemateri</label>
                            <p class="form-control">{{ $bisnisClass->pemateri }}</p>
                        </div>
                        <!-- info klas -->

                        <div class="row">
                            <div class="col mt-1"><hr></div>
                            <div class="col-4"><div class="text-primary text-center fw-bold fs-4">Join Now</div></div>
                            <div class="col mt-1"><hr></div>
                        </div>

                        <form action="#" method="post" class="pt-3" target="_self">
                            <div class="mb-3 mt-1">
                                <label for="nama" class="form-label">Name</label>
                                <input type="text" class="form-control" name="form-nama" id="form-nama" placeholder="Name...">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="form-email" id="form-email" placeholder="Email...">
                            </div>
                            <div class="mb-3">
                                <label for="wa" class="form-label">Email</label>
                                <input type="wa" class="form-control" name="form-wa" id="form-wa" placeholder="Whatsapp Number...">
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <button type="submit" class="btn button-primary">
                                    SUBMIT
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- info join End -->

            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- /bisnis kelas -->
    
@endsection