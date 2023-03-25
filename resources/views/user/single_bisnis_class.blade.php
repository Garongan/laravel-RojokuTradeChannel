@extends('layout.main')
@section('content')

    {{-- inner banner --}}
    @include('components.inner_banner')
    {{-- inner banner --}}

    <!-- bisnis keals -->
    <div class="container-fluid py-5 px-5">
        <div class="row g-5">
            <div class="col-lg-7">

                <!-- bisnis kelas Detail Start -->
                <div class="mb-5">
                    <h1 class="text-uppercase mb-4">Diam dolor duo ipsum clita sed lorem tempor. Clita kasd diam justo diam
                        lorem sed amet sed rebum eos.</h1>
                    <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                        magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                        amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                        sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                        aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                        sit stet no diam kasd vero.</p>
                    <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                        vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                        nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                        ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                        clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                        justo dolore sit invidunt.</p>
                    <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                        invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                        lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                        rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                        sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                        lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                        sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.</p>
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
                            <p class="form-control">UMUM</p>
                            <label class="fst-italic opacity-75 mt-3">Lorem</label>
                            <p class="form-control">Lorem ipsum</p>
                            <label class="fst-italic opacity-75 mt-3">Lorem</label>
                            <p class="form-control">Lorem ipsum</p>
                            <label class="fst-italic opacity-75 mt-3">Lorem</label>
                            <p class="form-control">Lorem ipsum</p>
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