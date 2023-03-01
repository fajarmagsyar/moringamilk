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
                        <div class="col-lg-12 text-center text-lg-start">
                            <center>
                                <div style="margin-top: -120px">
                                    <img src="/client/img/mimo-logo-cow.png" class="img-fluid" style="max-width: 200px"
                                        data-aos="fade-right" alt="">
                                    <h2 data-aos="fade-right" class="text-white"><b>Hitung Status Gizi</b></h2>
                                </div>
                                <p data-aos="fade-right">Perhitungan Z-Score dilakukan berdasarkan <a
                                        href="http://hukor.kemkes.go.id/uploads/produk_hukum/PMK_No__2_Th_2020_ttg_Standar_Antropometri_Anak.pdf"
                                        target="_blank" class="text-white"><b><sup><i class="bi bi-link"></i></sup>
                                            PERMENKES
                                            No. 2 Tahun 2020 Tentang Standar Antropometri Anak</b></a></p>
                                <br>
                                <br>
                                <div class="mb-3">
                                    <div class="row">

                                        <div class="col-lg-3" data-aos="fade-right" data-aos-delay="400"
                                            data-aos-offset="-500">
                                            <label for="" class="text-white">Jenis Kelamin</label>
                                            <select name="jk" id="jk" class="form-control mt-2 rounded">
                                                <option value="l">Laki-Laki</option>
                                                <option value="p">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-3" data-aos="fade-right" data-aos-delay="300"
                                            data-aos-offset="-500">
                                            <label for="" class="text-white">Berat Badan (Kg)</label>
                                            <input type="number" class="mt-2 form-control rounded"
                                                placeholder="Berat Badan (Kg)" id="bb">
                                        </div>
                                        <div class="col-lg-3" data-aos="fade-right" data-aos-delay="200"
                                            data-aos-offset="-500">
                                            <label for="" class="text-white">Tinggi/Panjang Badan (cm)</label>
                                            <input type="number" class="mt-2 form-control rounded"
                                                placeholder="Tinggi/Panjang Badan (cm)" id="tb" min="0"
                                                max="120">
                                        </div>
                                        <div class="col-lg-3" data-aos="fade-right" data-aos-delay="100"
                                            data-aos-offset="-500">
                                            <label for="" class="text-white">Usia (Bulan)</label>
                                            <input type="number" class="mt-2 form-control rounded"
                                                placeholder="Usia (Bulan)" id="usia" max="60" min="0"
                                                onKeyPress="if(this.value.length==2) return false;">
                                        </div>
                                        <p data-aos="fade-right" data-aos-delay="100" style="font-size: 11px; opacity: 0.8">
                                            Pengukuran untuk anak
                                            0 s/d 60
                                            bulan</p>

                                    </div>
                                </div>
                                <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"
                                    style="margin-top: -20px"><a href="#report" id="hitung"
                                        class="btn btn-outline-white btn-sm"><i class="bi bi-speedometer2"></i> Hitung
                                        Z-Score</a>
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
        <section class="section" id="report">
            <div class="container">

                <div>
                    <center>
                        <img src="/client/img/undraw_doctor_kw-5-l.svg" style="max-width: 300px" alt=""
                            data-aos="fade-up" data-aos-delay="">
                    </center>
                </div>

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">
                            <span>Report <br>Pengukuran Gizi</span>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <h3 class="mb-3">Berat Badan/Usia</h3>
                            <p class="section-heading" style="font-size: 20px" id="bbu">-</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                            <h3 class="mb-3">Tinggi Badan/Usia</h3>
                            <p class="section-heading" style="font-size: 20px" id="tbu">-</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-pass"></i>
                            </div>
                            <h3 class="mb-3">Berat Badan/Tinggi Badan</h3>
                            <p class="section-heading" style="font-size: 20px" id="bbtb">-</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

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
        </section>

    </main>
@endsection

@push('custom-script')
    <script src="/client/js/zscore.js"></script>
    <script>
        $(document).ready(function() {
            $('#hitung').on('click', function() {
                var bb = $('#bb').val();
                var tb = $('#tb').val();
                var usia = $('#usia').val();
                var jk = $('#jk').val();
                if (jk == 'l') {
                    //HITUGN SIMPANGAN
                    var simpang_bbu = bb - permen.lbb_u[usia]['med'];
                    var simpang_tbu = tb - permen.ltb_u[usia]['med'];
                    var simpang_bbtb = bb - permen.lbb_tb[Math.round(tb)]['med'];

                    //BBU
                    if (simpang_bbu < 0) {
                        var simpang_bbu2 = permen.lbb_u[usia]['sdm'];
                        zscore_bbu = (bb - permen.lbb_u[usia]['med']) / (permen.lbb_u[usia]['med'] -
                            simpang_bbu2);
                    } else {
                        var simpang_bbu2 = permen.lbb_u[usia]['sdp'];
                        zscore_bbu = (bb - permen.lbb_u[usia]['med']) / (simpang_bbu2 - permen.lbb_u[usia][
                            'med'
                        ]);
                    }

                    //TBU
                    if (simpang_tbu < 0) {
                        var simpang_tbu2 = permen.ltb_u[usia]['sdm'];
                        //L TB/U
                        zscore_tbu = (tb - permen.ltb_u[usia]['med']) / (permen.ltb_u[usia]['med'] -
                            simpang_tbu2);
                    } else {
                        var simpang_tbu2 = permen.ltb_u[usia]['sdp'];
                        //L TB/U
                        zscore_tbu = (tb - permen.ltb_u[usia]['med']) / (simpang_tbu2 - permen.ltb_u[usia][
                            'med'
                        ]);
                    }

                    //BBTB
                    if (simpang_bbtb < 0) {
                        var simpang_bbtb2 = permen.lbb_tb[Math.round(Math.round(tb) * 2)]['sdm'];
                        zscore_bbtb = (bb - permen.lbb_tb[Math.round(Math.round(tb) * 2)]['med']) / (permen
                            .lbb_tb[Math
                                .round(Math.round(tb) * 2)][
                                'med'
                            ] -
                            simpang_bbtb2);
                    } else {
                        var simpang_bbtb2 = permen.lbb_tb[Math.round(Math.round(tb) * 2)]['sdp'];
                        zscore_bbtb = (bb - permen.lbb_tb[Math.round(Math.round(tb) * 2)]['med']) / (
                            simpang_bbtb2 - permen
                            .lbb_tb[
                                Math.round(Math.round(tb) * 2)][
                                'med'
                            ]);
                    }


                } else {
                    //HITUNG SIMPANGAN
                    var simpang_bbu = bb - permen.pbb_u[usia]['med'];
                    var simpang_tbu = tb - permen.ptb_u[usia]['med'];
                    var simpang_bbtb = bb - permen.pbb_tb[Math.round(tb)]['med'];

                    //BBU
                    if (simpang_bbu < 0) {
                        var simpang_bbu2 = permen.pbb_u[usia]['sdm'];

                        zscore_bbu = (bb - permen.pbb_u[usia]['med']) / (permen.pbb_u[usia]['med'] -
                            simpang_bbu2);
                    } else {
                        var simpang_bbu2 = permen.pbb_u[usia]['sdp'];

                        zscore_bbu = (bb - permen.pbb_u[usia]['med']) / (simpang_bbu2 - permen.lbb_u[usia][
                            'med'
                        ]);
                    }

                    //TBU
                    if (simpang_tbu < 0) {
                        var simpang_tbu2 = permen.ptb_u[usia]['sdm'];

                        zscore_tbu = (tb - permen.ptb_u[usia]['med']) / (permen.ptb_u[usia]['med'] -
                            simpang_tbu2);
                    } else {
                        var simpang_tbu2 = permen.ptb_u[usia]['sdp'];

                        zscore_tbu = (tb - permen.ptb_u[usia]['med']) / (simpang_tbu2 - permen.ptb_u[usia][
                            'med'
                        ]);
                    }

                    //BBTB
                    if (simpang_bbtb < 0) {
                        var simpang_bbtb2 = permen.pbb_tb[Math.round(Math.round(tb) * 2)]['sdm'];
                        zscore_bbtb = (bb - permen.pbb_tb[Math.round(Math.round(tb) * 2)]['med']) / (permen
                            .pbb_tb[Math
                                .round(Math.round(tb) * 2)][
                                'med'
                            ] -
                            simpang_bbtb2);
                    } else {
                        var simpang_bbtb2 = permen.pbb_tb[Math.round(Math.round(tb) * 2)]['sdp'];
                        zscore_bbtb = (bb - permen.pbb_tb[Math.round(Math.round(tb) * 2)]['med']) / (
                            simpang_bbtb2 - permen
                            .pbb_tb[
                                Math.round(Math.round(tb) * 2)][
                                'med'
                            ]);
                    }
                }

                //Keterangan BB/U
                if (zscore_bbu < -3) {
                    var bbu_kat = "BERAT BADAN SANGAT KURANG";
                } else if (zscore_bbu < -2 && zscore_bbu >= -3) {
                    var bbu_kat = "BERAT BADAN KURANG";
                } else if (zscore_bbu > -2 && zscore_bbu < 1) {
                    var bbu_kat = "BERAT BADAN NORMAL";
                } else if (zscore_bbu > 1) {
                    var bbu_kat = "RISIKO BERAT BADAN LEBIH";
                }

                //Keterangan TB/U
                if (zscore_tbu < -3) {
                    var tbu_kat = "SANGAT PENDEK";
                } else if (zscore_tbu < -2 && zscore_tbu >= -3) {
                    var tbu_kat = "PENDEK";
                } else if (zscore_tbu > -2 && zscore_tbu < 1) {
                    var tbu_kat = "NORMAL";
                } else if (zscore_tbu > 1) {
                    var tbu_kat = "TINGGI";
                }


                //Keterangan TB/U
                if (zscore_bbtb < -3) {
                    var bbtb_kat = "GIZI BURUK";
                } else if (zscore_bbtb < -2 && zscore_bbtb >= -3) {
                    var bbtb_kat = "GIZI KURANG";
                } else if (zscore_bbtb > -2 && zscore_bbtb < 1) {
                    var bbtb_kat = "GIZI NORMAL";
                } else if (zscore_bbtb > 1 && zscore_bbtb < 2) {
                    var bbtb_kat = "BERISIKO GIZI LEBIH";
                } else if (zscore_bbtb > 2 && zscore_bbtb < 3) {
                    var bbtb_kat = "GIZI LEBIH";
                } else if (zscore_bbtb > 3) {
                    var bbtb_kat = "OBESITAS";
                }

                $('#bbu').empty();
                $('#bbu').append(bbu_kat);

                $('#tbu').empty();
                $('#tbu').append(tbu_kat);

                $('#bbtb').empty();
                $('#bbtb').append(bbtb_kat);


            });
        });
    </script>
@endpush
