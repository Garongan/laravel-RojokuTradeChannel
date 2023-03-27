<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ROJOKU CHANNEL - {{ $title }}</title>
        <!-- Template CSS Style link -->
        <link rel="stylesheet" href="/assets/css/style-starter.css">
    </head>
<body>

    {{-- <!-- header --> --}}
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img class="img-fluid logo" src="/assets/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon icon-expand bg-primary text-white pt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M4 18q-.425 0-.713-.288T3 17q0-.425.288-.713T4 16h16q.425 0 .713.288T21 17q0 .425-.288.713T20 18H4Zm0-5q-.425 0-.713-.288T3 12q0-.425.288-.713T4 11h16q.425 0 .713.288T21 12q0 .425-.288.713T20 13H4Zm0-5q-.425 0-.713-.288T3 7q0-.425.288-.713T4 6h16q.425 0 .713.288T21 7q0 .425-.288.713T20 8H4Z"/></svg>
                    </span>
                    <span class="navbar-toggler-icon icon-close bg-primary text-white pt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4.29-4.3l4.29 4.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42Z"/></svg>
                    </span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                    <ul class="navbar-nav my-3 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link {{ ( ($title === "Home") || ($title === "Detail") ) ? 'active' : "" }}" aria-current="page" href="/">Home</a>
                        </li>
                        <div class="pembatas-navbar"><span>|</span></div>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Tentang Kami") ? 'active' : "" }}" href="/about">Tentang Kami</a>
                        </li>
                        <span class="pembatas-navbar">|</span>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Produk") ? 'active' : "" }}" href="/produk">Produk</a>
                        </li>
                        <span class="pembatas-navbar">|</span>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Cara Kerja") ? 'active' : "" }}" href="/cara-kerja">Cara Kerja</a>
                        </li>
                        <span class="pembatas-navbar">|</span>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Partner") ? 'active' : "" }}" href="/partner">Partner</a>
                        </li>
                        <span class="pembatas-navbar">|</span>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Contact Us") ? 'active' : "" }}" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                    <form action="#error" method="GET" class="d-flex search-header">
                        <input style="color: #AC7769" class="form-control border" type="search" placeholder="Cari Produk ..." aria-label="Search" required>
                        <button class="btn btn-style" type="submit" style="background-color: #FF9830; color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="currentColor" d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3ZM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8Z"/></svg>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    {{-- <!-- //header --> --}}

    {{-- /content --}}
    @yield('content')
    {{-- /content --}}

    {{-- <!-- footer --> --}}
    <footer class="w3l-footer-16 pt-5 pb-1">
        <div class="container pt-lg-5 pt-sm-4 pb-sm-2">
            <div class="row">
                <div class="col col-lg col-12">
                    <a class="d-flex align-items-center" href="index.html">
                        <h2 class="text-break">
                            ROJOKU<br><span>Perumda Jepara<br>Trade Channel</span>
                        </h2>
                    </a>
                    <p class="mt-3">
                        Rojoku Perumda Jepara Channel merupakan inkubasi dan akselerator para pelaku usaha
                        UKM & IKM Kabupaten Jepara untuk di scaleup dan diintegrasikan dalam satu kesatuan
                        ekosistem bisnis perdagangan. Memperkuat jaringan pemasaran produk merupakan tujuan
                        utama dari ROJOKU Perumda Jepara Trade Channel
                    </p>
                </div>
                <div class="col col-lg col-12">
                    <h2>ROJOKU<br><span>Contact And<br>Information</span></h2>
                    <ul class="footer-gd-16 mt-3">
                        <li>Jl. Kertanegara no. 23, Kota Solo Jawa Tengah</li>
                        <li>+62811000000082</li>
                        <li>officialairafashion.id</li>
                        <li>www.airafashion.id</li>
                    </ul>
                </div>
                <div class="col col-lg-5 col-12">
                    <h2>AIRA<span><br>Brand Affiliation<br>and Support</span></h2>
                    <div class="row mt-3 brand-logo">
                        <div class="col">
                            <img src="/assets/images/logo-mandiri.png" alt="logo-mandiri">
                        </div>
                        <div class="col">
                            <img src="/assets/images/logo-agincourt.png" alt="logo=agincourt">
                        </div>
                        <div class="col">
                            <img src="/assets/images/logo-ballooney.png" alt="logo-ballooney">
                        </div>
                        <div class="col">
                            <img src="/assets/images/logo-jasatirta.png" alt="logo-jasatirta">
                        </div>
                    </div>
                    <div class="row brand-logo mt-3">
                        <div class="col">
                            <img src="/assets/images/logo-mandiri.png" alt="logo-mandiri">
                        </div>
                        <div class="col">
                            <img src="/assets/images/logo-agincourt.png" alt="logo=agincourt">
                        </div>
                        <div class="col">
                            <img src="/assets/images/logo-ballooney.png" alt="logo-ballooney">
                        </div>
                        <div class="col">
                            <img class="img-fluid" src="/assets/images/logo-jasatirta.png" alt="logo-jasatirta">
                        </div>
                    </div>
                </div>
            </div>
            <div class="below-section text-center pt-1 mt-5">
                <p class="copy-text">&copy; 2021 ROJOKU TRADE CHANNEL Perumda Aneka Usaha Jepara
                </p>
            </div>
        </div>
    </footer>
    {{-- <!-- //footer --> --}}

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 320 512"><path fill="currentColor" d="M313.553 119.669L209.587 7.666c-9.485-10.214-25.676-10.229-35.174 0L70.438 119.669C56.232 134.969 67.062 160 88.025 160H152v272H68.024a11.996 11.996 0 0 0-8.485 3.515l-56 56C-4.021 499.074 1.333 512 12.024 512H208c13.255 0 24-10.745 24-24V160h63.966c20.878 0 31.851-24.969 17.587-40.331z"/></svg>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- banner slick slider -->
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/script.js"></script>
    <!-- //banner slick slider -->

    <!-- MENU-JS -->
    <script async>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
                $(".logo").attr("src", "/assets/images/logo1.png");
            } else {
                $("#site-header").removeClass("nav-fixed");
                $(".logo").attr("src", "/assets/images/logo.png");
            }
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    
    <!-- bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->

    <!-- script slider kategori -->
    <script>
        $(document).ready(function () {  
            document.getElementById('isi-kategori').scrollLeft += 230;
        })
        const buttonRight = document.getElementById('slideRight');
        const buttonLeft = document.getElementById('slideLeft');
  
        buttonRight.onclick = function () {
          document.getElementById('isi-kategori').scrollLeft += 250;
        };
        buttonLeft.onclick = function () {
          document.getElementById('isi-kategori').scrollLeft -= 250;
        };
    </script>
    <!-- /script slider kategori -->
    <!-- script scroll to produk -->
    <script>
        $(".scrollToProduk").click(function() {
            $('html,body').animate({
                scrollTop: $(".list-kategori-produk").offset().top});
        });
    </script>
    <!-- /scroll to produk -->
    <script async>
        // loader
        document.onreadystatechange = function () {
            if (document.readyState !== "complete") {
                $('body').addClass('noscroll');
            } else {
                $('body').removeClass('noscroll');
            }
        };
    </script>
    <!-- productt script -->
    <script async src="/assets/js/product.js"></script>
    <!-- /product script -->
    <!-- bisnis class pagination -->
    <script async src="/assets/js/bisnis-class-pagination.js"></script>
    <!-- /bisnis class pagination -->

    <!-- //Js scripts -->

</body>
</html>