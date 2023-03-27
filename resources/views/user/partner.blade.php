@extends('layout/main')
@section('content')

    {{-- inner banner --}}
    @include('components.inner_banner')
    {{-- /inner banner --}}

    <!-- section partner header -->
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="title-style mt-4 text-center">Bergabung sebagai <span>Partner</span></h3>
                    <form action="#" method="post" class="pt-5">
                        <div class="mb-3 mt-1">
                            <label for="nama" class="form-label">Name</label>
                            <input type="text" class="form-control" name="form-nama" id="form-nama" placeholder="Name..." autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="form-email" id="form-email" placeholder="Email..." autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="alasan" class="form-label">Alasan Bergabung</label>
                            <textarea name="alasan" class="form-control" id="alasan" cols="30" rows="5" placeholder="Alasan Ingin Bergabung..." autofocus></textarea>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <button type="submit" class="btn button-primary">
                                SUBMIT
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /section partner header-->

    <!-- section our partner body -->
    <section class="py-5">
        <div class="container">
            <h3 class="title-style text-center mb-lg-5 mb-4">Partner <span>Kami</span></h3>
            <div class="row justify-content-start py-3 row-gap-4">
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-agincourt.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-ballooney.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-jasatirta.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-mandiri.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-agincourt.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-ballooney.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-jasatirta.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box-wrap">
                        <div class="square-holder">
                            <img src="/assets/images/logo-mandiri.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /section our partner body -->
    
@endsection