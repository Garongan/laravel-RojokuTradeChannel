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
    <header class="navbar bg-light shadow-sm sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">
            <img src="/assets/images/logo1.png" class="img-fluid logo" alt="">
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" style="top: 0.25rem;right: 1rem;" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            @auth
            <form action="/logout" method="post">
                @csrf
                <button class="btn mb-2 logout-button text-primary" type="submit">
                    Hello {{ Auth::user()->name }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 2h9a2 2 0 0 1 2 2v2h-2V4H6v16h9v-2h2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><path fill="currentColor" d="M16.09 15.59L17.5 17l5-5l-5-5l-1.41 1.41L18.67 11H9v2h9.67z"/></svg>
                    <p>Logout</p>
                </button>
            </form>
            @endauth
          </div>
        </div>
    </header>

    {{-- side bar --}}
    <div class="container-fluid">
        <div class="row bg-body">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="">
                <div class="position-sticky pt-3 sidebar-sticky">
                  <ul class="nav flex-column" style="color: #000">
                    <li class="nav-item">
                      <a class="nav-link {{ ($title === "Dashboard") ? 'text-primary' : '' }}" aria-current="page" href="/admin/dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Produk") ? 'text-primary' : '' }}" aria-current="page" href="/admin/produk">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 2048 2048"><path fill="currentColor" d="m960 120l832 416v1040l-832 415l-832-415V536l832-416zm625 456L960 264L719 384l621 314l245-122zM960 888l238-118l-622-314l-241 120l625 312zM256 680v816l640 320v-816L256 680zm768 1136l640-320V680l-640 320v816z"/></svg>
                          Produk
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ ($title === "Kategori") ? 'text-primary' : '' }}" aria-current="page" href="/admin/kategori">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm10 10h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4s4-1.794 4-4s-1.794-4-4-4zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4s4-1.794 4-4s-1.794-4-4-4z"/></svg>
                        Kategori Produk
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "News") ? 'text-primary' : '' }}" aria-current="page" href="/admin/news">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 17h5v-2H6v2Zm10 0h2v-2h-2v2ZM6 13h5v-2H6v2Zm10 0h2V7h-2v6ZM6 9h5V7H6v2ZM4 21q-.825 0-1.413-.588T2 19V5q0-.825.588-1.413T4 3h16q.825 0 1.413.588T22 5v14q0 .825-.588 1.413T20 21H4Zm0-2h16V5H4v14Zm0 0V5v14Z"/></svg>
                          News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Bussines Class") ? 'text-primary' : '' }}" aria-current="page" href="/admin/bisnis-class">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M4 21q-.825 0-1.413-.588T2 19V8q0-.825.588-1.413T4 6h4V4q0-.825.588-1.413T10 2h4q.825 0 1.413.588T16 4v2h4q.825 0 1.413.588T22 8v11q0 .825-.588 1.413T20 21H4Zm6-15h4V4h-4v2Zm10 9h-5v2H9v-2H4v4h16v-4Zm-9 0h2v-2h-2v2Zm-7-2h5v-2h6v2h5V8H4v5Zm8 1Z"/></svg>
                          Business Class
                        </a>
                    </li>
                  </ul>
                </div>
              </nav>
            <div class="col-md-9 col-lg-10 ms-sm-auto px-md-4 bg-light">

                {{-- content --}}
                @yield('content')
                {{-- /content --}}

            </div>
        </div>
    </div>
    {{-- side bar --}}

    <!-- footer -->
    <footer class="bg-secondary sticky-bottom">
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

    <!-- common jquery plugin -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- produck deteil -->
    <script src="/assets/js/produk-detail.js"></script>
    <!-- /produk detail -->

    <!-- bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->

    {{-- custom js --}}
    <script src="/assets/js/custom.js"></script>
    {{-- /custom js --}}

</body>
</html>