<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }} | Mimo Susu Bubuk Kelor NTT</title>
    <meta content="Website Official Mimo Susu Bubuk Kelor Lokal Nusa Tenggara Timur" name="description">
    <meta content="moringa milk mimo susu bubuk kelor marungga nusa tenggara timur ntt" name="keywords">

    <!-- Favicons -->
    <link href="/client/img/favicon.png" rel="icon">
    <link href="/client/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/client/vendor/aos/aos.css" rel="stylesheet">
    <link href="/client/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/client/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/client/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/client/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/client/css/style.css" rel="stylesheet">
    @stack('custom-style')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="/"><img src="/client/img/mimo-logo-cow.png" alt="">Mimo</a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="/client/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="/">Beranda</a></li>
                    <li><a href="/#mengapa">Mengapa Daun Kelor?</a></li>
                    <li><a href="/#varian">Varian Mimo</a></li>
                    <li><a href="/#testimoni">Testimoni</a></li>
                    <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/zscore-gizi">Z-Score Gizi Anak</a></li>
                            <li><a href="/massa-tubuh">Massa Tubuh</a></li>
                        </ul>
                    </li>
                    <li><a href="/#kontak">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>Tentang Mimo Moringa Milk</h3>
                    <p>Mimo adalah susu bubuk kelor karya Nusa Tenggara Timor yang telah teruji BPOM yang telah berdiri
                        sejak 2019, Mimo telah bekerja sama dengan kelurahan Nefonaek untuk turut membantu pencegahan
                        stunting dengan produk ini.</p>
                    <p class="social">
                        <a href="/#"><span class="bi bi-facebook"></span></a>
                        <a href="https://www.instagram.com/moringa.milk/"><span class="bi bi-instagram"></span></a>
                        <a href="https://www.facebook.com/profile.php?id=100090336715504"><span
                                class="bi bi-youtube"></span></a>
                    </p>
                </div>
                <div class="col-md-7 ms-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3>Navigasi</h3>
                            <ul class="list-unstyled">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/#mengapa">Mengapa Daun Kelor?</a></li>
                                <li><a href="/#varian">Varian Mimo</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <ul class="list-unstyled">
                                <li><a href="/#testimoni">Testimoni</a></li>
                                <li><a href="/zscore-gizi">Z-Score Gizi</a></li>
                                <li><a href="/massa-tubuh">Massa Tubuh</a></li>
                                <li><a href="/#kontak">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <p class="copyright">&copy; Copyright Mimo Susu Bubuk Kelor. Nusa Tenggara Timur
                        <b>{{ date('Y') }}</b>
                    </p>
                    <div class="credits">
                        Made with 💘 by <a href="https://magsyar.com/">Magsyar (Mimo Susu Bubuk Kelor)</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <a href="/#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="/client/vendor/aos/aos.js"></script>
    <script src="/client/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/client/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/client/vendor/php-email-form/validate.js"></script>

    <script src="/client/js/main.js"></script>
    @stack('custom-script')
</body>

</html>
