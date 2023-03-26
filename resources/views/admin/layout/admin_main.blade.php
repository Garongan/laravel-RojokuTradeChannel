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
    
                <a class="navbar-brand align-self-center" href="/">
                    <img src="/assets/images/logo1.png" class="img-fluid logo" alt="">
                </a>

                <!-- navbar -->
                
                <a href="/admin/dashboard" class="text-center btn text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M11 21H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h6v18zm2 0h6c1.1 0 2-.9 2-2v-7h-8v9zm8-11V5c0-1.1-.9-2-2-2h-6v7h8z"/></svg>
                    <span>Dashboard</span>
                </a>

                <!-- /navbar -->

                @auth
                <form action="/logout" method="post">
                    @csrf
                    <p class="text-primary">
                        Hello {{ Auth::user()->name }}
                        <button class="btn mb-2 logout-button" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6 2h9a2 2 0 0 1 2 2v2h-2V4H6v16h9v-2h2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><path fill="currentColor" d="M16.09 15.59L17.5 17l5-5l-5-5l-1.41 1.41L18.67 11H9v2h9.67z"/></svg>
                            <p>Logout</p>
                        </button>
                    </p>
                </form>
                @endauth
    
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