<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - {{ $title }}</title>
    <link rel="stylesheet" href="/assets/css/style-starter.css">
</head>
<body>
    
    <!-- header -->
    <header>
        <nav class="navbar navbar-light shadow">
            <div class="container">
    
                <a class="navbar-brand align-self-center" href="../index.html">
                    <img src="../assets/images/logo1.png" class="img-fluid logo" alt="">
                </a>

                <!-- navbar -->
                
                <a href="/admin/dashboard" class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="39.29" viewBox="0 0 1792 1408"><path fill="currentColor" d="M384 896q0-53-37.5-90.5T256 768t-90.5 37.5T128 896t37.5 90.5T256 1024t90.5-37.5T384 896zm192-448q0-53-37.5-90.5T448 320t-90.5 37.5T320 448t37.5 90.5T448 576t90.5-37.5T576 448zm428 481l101-382q6-26-7.5-48.5T1059 469t-48 6.5t-30 39.5L880 897q-60 5-107 43.5t-63 98.5q-20 77 20 146t117 89t146-20t89-117q16-60-6-117t-72-91zm660-33q0-53-37.5-90.5T1536 768t-90.5 37.5T1408 896t37.5 90.5t90.5 37.5t90.5-37.5T1664 896zm-640-640q0-53-37.5-90.5T896 128t-90.5 37.5T768 256t37.5 90.5T896 384t90.5-37.5T1024 256zm448 192q0-53-37.5-90.5T1344 320t-90.5 37.5T1216 448t37.5 90.5T1344 576t90.5-37.5T1472 448zm320 448q0 261-141 483q-19 29-54 29H195q-35 0-54-29Q0 1158 0 896q0-182 71-348t191-286T548 71T896 0t348 71t286 191t191 286t71 348z"/></svg>
                    <span>Dashboard</span>
                </a>

                <!-- /navbar -->

                <p class="text-primary">
                    Hello Admin
                    <button class="btn mb-2 logout-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 2h9a2 2 0 0 1 2 2v2h-2V4H6v16h9v-2h2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><path fill="currentColor" d="M16.09 15.59L17.5 17l5-5l-5-5l-1.41 1.41L18.67 11H9v2h9.67z"/></svg>
                        <p>Logout</p>
                    </button>
                </p>
    
            </div>
        </nav>
    </header>
    <!-- /header -->

    {{-- content --}}
    @yield('content')
    {{-- /content --}}

    <!-- footer -->
    <footer class="shadow-top mt-5">
        <div class="container">
            <div class="w-100 py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center text-black">
                                Copyright © 2021 Rojoku Trade Channel 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->

</body>
</html>