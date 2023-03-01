@extends('client.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-12 iphone-wrap" style="margin-top: -100px">
                            {{-- <img src="/client/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right"> --}}
                            <center>
                                <img src="/client/img/mimo-logo-cow.png" alt="Image" style="max-width: 400px"
                                    data-aos="fade-right" data-aos-delay="200">
                            </center>
                        </div>
                        <div class="col-lg-12 text-center text-lg-start">
                            <center>
                                <h1 data-aos="fade-right">Moringa Milk</h1>
                                <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Susu Bubuk Kelor Nusa Tenggara
                                    Timur</p>
                                <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"
                                    style="margin-top: -20px"><a href="#" class="btn btn-outline-white">Jelajahi</a>
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Home Section ======= -->
        <section class="section" id="mengapa">
            <div class="container">

                <div>
                    <center>
                        <img src="/client/img/moringa.png" style="max-width: 100px; opacity:0.8" alt=""
                            data-aos="fade-up" data-aos-delay="">
                    </center>
                </div>

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Mengapa menggunakan daun kelor</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-shield-shaded"></i>
                            </div>
                            <h3 class="mb-3">Daya tahan tubuh</h3>
                            <p>Daun kelor kaya akan vitamin C yang mampu meningkatkan imunitas tubuh.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-capsule-pill"></i>
                            </div>
                            <h3 class="mb-3">Booster</h3>
                            <p>Menjadi suplemen untuk mendorong kesehatan bagi anak-anak untuk mencegah stunting.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-box2-heart-fill"></i>
                            </div>
                            <h3 class="mb-3">Produk Lokal</h3>
                            <p>Mimo dibuat sepenuhnya dengan hasil lokal untuk meningkatkan ekonomi NTT</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- <section class="section">

            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade">
                    <div class="col-md-6 mb-5">
                        <img src="/client/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Varian Mimo</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="step">
                            <img src="/client/img/mimo-kids.jpg" width="100%" class="rounded" alt="">
                            <span class="number mt-4">Rp. 60.000</span>
                            <h3>Mimo Balita & Kids</h3>
                            <p>
                                Suplemen makanan bagi anak-anak untuk menunjang gizi yang diasup.
                            </p>
                            <a href="/produk/kids" class="btn btn-primary btn-sm">Lihat Produk</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step">
                            <img src="/client/img/mimo-adults.jpg" width="100%" class="rounded" alt="">
                            <span class="number mt-4">Rp. 75.000</span>
                            <h3>Mimo Balita & Kids</h3>
                            <p>
                                Menjaga kesehatan orang dewasa dengan produk kelor lokal Nusa Tenggara Timur.
                            </p>
                            <a href="/produk/kids" class="btn btn-primary btn-sm">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>

        </section> --}}

        <section class="section" id="varian">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5" data-aos="fade-up">
                    <h2 class="section-heading">Varian Produk</h2>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 me-auto">
                        <h2 class="mb-4"><b>Mimo Kids</b></h2>
                        <p class="mb-4">Mimo untuk balita dan anak-anak berfungsi sebagai suplemen gizi yang dapat
                            dikonsumsi, Mimo dibuat tanpa bahan pengawet dan semua khasiat dari daun kelor, diproduksi dan
                            dikemas dengan steril di Kota Kupang serta telah teruji oleh BPOM</p>
                        {{-- <p><a href="/produk/kids" class="btn btn-primary">Lihat Produk</a></p> --}}
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="/client/img/kids.png" class="rounded img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 ms-auto order-2">
                        <h2 class="mb-4"><b>Mimo Adults</b></h2>
                        <p class="mb-4">Suplemen gizi yang dapat
                            dikonsumsi orang dewasa varian ini menganduk lebih sedikit lemak dan gula guna menjaga kesehatan
                            tubuh orang dewasa tanpa mengurangi khasiat yang diberikan, Mimo dibuat tanpa bahan pengawet dan
                            semua khasiat dari daun kelor, diproduksi dan
                            dikemas dengan steril di Kota Kupang serta telah teruji oleh BPOM</p>
                        {{-- <p><a href="/produk/kids" class="btn btn-primary">Lihat Produk</a></p> --}}
                    </div>
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="/client/img/adults.png" class="rounded img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section class="section border-top border-bottom" id="testimoni">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-4">
                        <h2 class="section-heading">Tetimoni tentang kami</h2>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-7">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="review text-center">
                                        <p class="stars">
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                            <span class="bi bi-star-fill"></span>
                                        </p>
                                        <h3>Bermanfaat untuk anak-anak stunting</h3>
                                        <blockquote>
                                            <p>Susu Mimo ini telah banyak membantu Kelurahan Nefonaek untuk menekan angka
                                                stunting, program susu gratis yang diberikan sangat dihargai oleh keluarga
                                                anak stunting yang menerima bantuan</p>
                                        </blockquote>

                                        <p class="review-user">
                                            <img src="/client/img/herlina.jpg" alt="Image"
                                                class="img-fluid rounded-circle mb-3">
                                            <span class="d-block">
                                                <span class="text-black">Ibu Herlina Johannis</span>, &mdash; Ketua TP PKK
                                                Kelurahan Nefonaek
                                            </span>
                                        </p>

                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= CTA Section ======= -->
        <section class="section cta-section" id="kontak">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                        <h2>Ingin bertanya-tanya lebih lanjut seputar Mimo?</h2>
                        <a href="https://wa.me/6281337608119" class="btn btn-primary mt-3">Hubungi Kami</a>
                    </div>
                    <div class="col-md-6">
                        <img src="/client/img/mimo-logo-cow.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End CTA Section -->

    </main><!-- End #main -->
@endsection
