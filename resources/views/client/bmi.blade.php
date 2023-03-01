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
                                    <h2 data-aos="fade-right" class="text-white"><b>Hitung Indeks Masa Tubuh</b></h2>
                                </div>
                                <br>
                                <br>
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400"
                                            data-aos-offset="-500">
                                            <label for="" class="text-white">Berat Badan (Kg)</label>
                                            <input type="number" class="mt-2 form-control rounded"
                                                placeholder="Berat Badan (Kg)" id="bb">
                                        </div>
                                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300"
                                            data-aos-offset="-500">
                                            <label for="" class="text-white">Tinggi Badan (cm)</label>
                                            <input type="number" class="mt-2 form-control rounded"
                                                placeholder="Tinggi/Panjang Badan (cm)" id="tb" min="0"
                                                max="120">
                                        </div>

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
                        <img src="/client/img/bmi.svg" style="max-width: 300px" alt="" data-aos="fade-up"
                            data-aos-delay="">
                    </center>
                </div>

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="">
                            <br>
                            <b><span class="mt-3" id="hasil">Silahkan lengkapi data diatas</span></b>
                        </h2>
                        <span class="mt-3" id="nilai"></span>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-6 mx-auto">
                        <table class="table " cellspacing="0" cellpadding="0" data-aos="fade-up" data-aos-delay="300">
                            <tbody>
                                <tr>
                                    <td rowspan="2"
                                        style="width: 143.0px; height: 56.0px; background-color: #cfe7cf; border-style: solid; border-width: 3.0px 1.0px 1.0px 1.0px; border-color: #ffffff #ffffff #ffffff #ffffff;"
                                        valign="middle">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000"><b>Kurus</b></span>
                                        </p>
                                    </td>
                                    <td style="width: 142.0px; height: 28.0px; background-color: #cfe7cf; border-style: solid; border-width: 3.0px 1.0px 1.0px 1.0px; border-color: #ffffff #ffffff #ffffff #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">Kekurangan berat badan
                                                tingkat
                                                berat</span>
                                        </p>
                                    </td>
                                    <td style="width: 143.0px; height: 28.0px; background-color: #cfe7cf; border-style: solid; border-width: 3.0px 1.0px 1.0px 1.0px; border-color: #ffffff #ffffff #ffffff #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">&lt; 17,0</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 142.0px; height: 27.0px; background-color: #ebf4e8; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">Kekurangan berat badan
                                                tingkat
                                                ringan</span>
                                        </p>
                                    </td>
                                    <td style="width: 143.0px; height: 27.0px; background-color: #ebf4e8; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">17,0 - 18,4</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2"
                                        style="width: 143.0px; height: 42.0px; background-color: #cfe7cf; border: 1.0px solid #ffffff;"
                                        valign="middle">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000"><b>Normal</b></span>
                                        </p>
                                    </td>
                                    <td style="width: 142.0px; height: 20.0px; background-color: #cfe7cf; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p
                                            style="margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; min-height: 14.0px;">
                                        </p>
                                    </td>
                                    <td style="width: 143.0px; height: 20.0px; background-color: #cfe7cf; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p
                                            style="margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; min-height: 14.0px;">
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 142.0px; height: 21.0px; background-color: #ebf4e8; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p
                                            style="margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; min-height: 14.0px;">
                                        </p>
                                    </td>
                                    <td style="width: 143.0px; height: 21.0px; background-color: #ebf4e8; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">18,5 - 25,0</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2"
                                        style="width: 143.0px; height: 56.0px; background-color: #cfe7cf; border: 1.0px solid #ffffff;"
                                        valign="middle">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000"><b>Gemuk</b></span>
                                        </p>
                                    </td>
                                    <td style="width: 142.0px; height: 27.0px; background-color: #cfe7cf; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">Kelebihan berat badan
                                                tingkat
                                                ringan</span>
                                        </p>
                                    </td>
                                    <td style="width: 143.0px; height: 27.0px; background-color: #cfe7cf; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">25,1 - 27,0</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 142.0px; height: 28.0px; background-color: #ebf4e8; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">Kelebihan berat badan
                                                tingkat
                                                berat</span>
                                        </p>
                                    </td>
                                    <td style="width: 143.0px; height: 28.0px; background-color: #ebf4e8; border: 1.0px solid #ffffff;"
                                        valign="top">
                                        <p style="margin: 0.0px 0.0px 0.0px 0.0px;"><span
                                                style="font-style: normal; font-variant: no-common-ligatures; font-weight: normal; font-stretch: normal; font-size: medium; line-height: normal; font-family: Calibri; font-size-adjust: none; font-optical-sizing: auto; font-language-override: normal; font-feature-settings: normal; font-variation-settings: normal; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000;"
                                                size="3" face="Calibri" color="#000000">&gt; 27,0</span>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8 mx-auto" data-aos="fade-up" data-aos-delay="">
                        <center><i class="bi bi-info-circle-fill text-primary f-20"></i> <i>info</i></center>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Apa itu BMI (IMT)?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Body Mass Index (BMI) atau yang sering dikenal dengan Indeks Massa Tubuh (IMT)
                                            adalah nilai ukur untuk mengetahui status gizi seseorang berdasarkan berat dan
                                            tinggi badannya. Nilai BMI (IMT) juga dapat menjadi alat skrining awal untuk
                                            mengetahui risiko seseorang terhadap suatu penyakit.
                                        </p>
                                        <p>
                                            Nilai BMI (IMT) yang tinggi menandakan bahwa Anda kelebihan berat badan
                                            (overweight
                                            atau obesitas). Sementara nilai BMI (IMT) yang rendah artinya Anda kekurangan
                                            gizi
                                            dan memiliki berat badan rendah. Namun, IMT tidak bisa membedakan persen lemak
                                            tubuh
                                            dan persen massa otot.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Cara penilaian BMI (IMT)
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            BMI atau IMT diukur dengan cara membandingkan berat badan dengan tinggi badan.
                                            Cara
                                            ini dapat digunakan untuk orang yang berusia di atas 18 tahun.
                                        </p>
                                        <p>
                                            Sementara itu, menghitung indeks massa tubuh dengan cara ini tidak berlaku untuk
                                            anak dan remaja (usia di bawah 18 tahun). Status gizi anak diukur dengan
                                            indikator
                                            berat badan menurut usia, tinggi badan menurut usia, dan berat badan menurut
                                            tinggi
                                            badan.
                                        </p>
                                        <p>
                                            Nilai BMI atau IMT yang tidak normal dapat menandakan Anda berisiko mengalami
                                            penyakit tertentu. Namun, menghitung IMT saja tidak cukup untuk menegakkan suatu
                                            diagnosis penyakit. Maka itu, biasanya dokter akan melakukan tes dan skrining
                                            lanjutan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Mengapa saya harus mengukur Indeks Massa Tubuh (IMT)?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Mengetahui IMT membantu Anda untuk menjaga rasio lemak tubuh yang terkait dengan
                                            tinggi badan Anda. IMT juga memberi peringatan peluang risiko penyakit yang
                                            mungkin
                                            mengintai kesehatan Anda.
                                        </p>
                                        <p>
                                            IMT yang sehat umumnya mengarah pada kualitas hidup yang lebih bahagia dan lebih
                                            sehat. Sementara IMT yang tinggi berkaitan erat dengan risiko penyakit seperti
                                            diabetes tipe 2, penyakit jantung, dan tekanan darah tinggi.
                                        </p>
                                        <p>
                                            Mengetahui IMT berarti memberi pertimbangan bagi Anda dan tenaga kesehatan dalam
                                            mengambil keputusan mengenai kondisi kesehatan tubuh Anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        Apakah IMT yang tinggi menimbulkan risiko kesehatan yang serius?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            IMT dapat menjadi alat skrining, tetapi bukan tolok ukur diagnosis kegemukan
                                            atau kesehatan tubuh seseorang. Untuk menentukan apakah IMT Anda menunjukkan
                                            risiko kesehatan tertentu, Anda perlu mendapatkan penilaian ke tenaga kesehatan
                                            lebih lanjut.
                                        </p>
                                        <p>
                                            Penilaian ini meliputi pengukuran ketebalan lipatan kulit, evaluasi diet,
                                            aktivitas fisik, serta riwayat keluarga.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false"
                                        aria-controls="flush-collapseFive">
                                        Apakah IMT yang tinggi menimbulkan risiko kesehatan yang serius?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Jika Anda memiliki IMT 30 ke atas, Anda dikategorikan obesitas. Obesitas membawa
                                            efek bagi tubuh, meningkatkan risiko kematian, serta mengembangkan kondisi
                                            kesehatan
                                            tertentu, seperti:
                                        </p>

                                        <ol>
                                            <li>Diabetes tipe 2</li>
                                            <li>Kolesterol LDL tinggi, kolesterol HDL rendah, atau kadar lipid darah yang
                                                tidak
                                                sehat</li>
                                            <li>
                                                Penyakit jantung koroner
                                            </li>
                                            <li>Stroke</li>
                                            <li>Penyakit kantung empedu</li>
                                            <li>Osteoartritis</li>
                                            <li>Sleep apnea dan masalah pernapasan</li>
                                            <li>Peradangan kronis dan peningkatan stres oksidatif</li>
                                            <li>Kanker</li>
                                            <li>Depresi klinis, kecemasan, dan kondisi kesehatan mental lainnya</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSix" aria-expanded="false"
                                        aria-controls="flush-collapseSix">
                                        Kekurangan berat badan: Apa faktor risikonya?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Jika IMT Anda di bawah 18,5, berat badan Anda termasuk kurang. Ketika berat
                                            badan Anda cukup rendah dari berat ideal, Anda juga memiliki risiko penyakit
                                            tertentu akibat kekurangan nutrisi dan sistem kekebalan tubuh yang lemah.
                                            Hal ini membuka peluang pada risiko kesehatan berikut:
                                        </p>

                                        <ol>
                                            <li>Malnutrisi</li>
                                            <li>Anemia</li>
                                            <li>Osteoporosis karena kekurangan kalsium dan vitamin D</li>
                                            <li>Masalah kesuburan dari siklus menstruasi tidak teratur</li>
                                            <li>Risiko komplikasi operasi yang lebih tinggi</li>
                                            <li>Pertumbuhan dan masalah perkembangan yang terhambat pada anak dan remaja
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                        aria-controls="flush-collapseSeven">
                                        Apakah IMT yang tinggi menimbulkan risiko kesehatan yang serius?
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Jika Anda memiliki IMT 30 ke atas, Anda dikategorikan obesitas. Obesitas membawa
                                            efek bagi tubuh, meningkatkan risiko kematian, serta mengembangkan kondisi
                                            kesehatan
                                            tertentu, seperti:
                                        </p>

                                        <ol>
                                            <li>Diabetes tipe 2</li>
                                            <li>Kolesterol LDL tinggi, kolesterol HDL rendah, atau kadar lipid darah yang
                                                tidak
                                                sehat</li>
                                            <li>
                                                Penyakit jantung koroner
                                            </li>
                                            <li>Stroke</li>
                                            <li>Penyakit kantung empedu</li>
                                            <li>Osteoartritis</li>
                                            <li>Sleep apnea dan masalah pernapasan</li>
                                            <li>Peradangan kronis dan peningkatan stres oksidatif</li>
                                            <li>Kanker</li>
                                            <li>Depresi klinis, kecemasan, dan kondisi kesehatan mental lainnya</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseEight" aria-expanded="false"
                                        aria-controls="flush-collapseEight">
                                        Apakah IMT menjadi indikator yang baik dalam mengukur lemak tubuh?
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            IMT dan tingkat kegemukan tubuh mungkin memiliki korelasi yang kuat, tetapi
                                            bukan berarti dua orang dengan IMT yang sama memiliki hasil tingkat lemak tubuh
                                            yang sama juga.

                                            Hal ini tergantung pada tipe tubuh, usia, jenis, kelamin, dan tingkat kebugaran.
                                            Bahkan pada IMT yang sama, atlet memiliki lebih sedikit lemak tubuh dibandingkan
                                            mereka yang bukan atlet.

                                            Bahkan, orang yang lebih tua akan memiliki lemak yang lebih banyak dibandingkan
                                            orang yang lebih muda, termasuk wanita memiliki lebih banyak lemak tubuh
                                            dibandingkan pria.

                                            Tenaga kesehatan yang terlatih akan mengevaluasi kesehatan individu berdasarkan
                                            status dan risikonya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseNine" aria-expanded="false"
                                        aria-controls="flush-collapseNine">
                                        Sumber dan Referensi
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            The Health Effects of Overweight and Obesity. Centers for Disease Control and
                                            Prevention. Diakses pada 31 Mei 2021 dari
                                            https://www.cdc.gov/healthyweight/effects/index.html

                                            BMI Calculator Child and Teen. Centers for Disease Control and Prevention.
                                            Diakses pada 31 Mei 2021 dari
                                            https://www.cdc.gov/healthyweight/bmi/calculator.html

                                            Body Mass Index Calculator. Diabetes Canada. Diakses pada 31 Mei 2021 dari
                                            https://www.diabetes.ca/managing-my-diabetes/tools—resources/body-mass-index-(bmi)-calculator

                                            Body-Mass Index (BMI) in Children. HealthyChildren.org. Diakses pada 31 May 2021
                                            dari
                                            https://www.healthychildren.org/English/health-issues/conditions/obesity/Pages/Body-Mass-Index-Formula.aspx

                                            What is the Body Mass Index (BMI)? National Health Service UK. Diakses pada 1
                                            Juni 2021 dari
                                            https://www.nhs.uk/common-health-questions/lifestyle/what-is-the-body-mass-index-bmi/

                                            Assessing Your Weight and Health Risk. National Heart Lung, and Blood Institute.
                                            Diakses pada 1 June 2021 dari
                                            https://www.nhlbi.nih.gov/health/educational/lose_wt/risk.htm

                                            Underweight Adults. National Health Service UK. Diakses pada 1 June 2021 dari
                                            https://www.nhs.uk/live-well/healthy-weight/advice-for-underweight-adults/
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                var weight = $('#bb').val();
                var height = $('#tb').val();
                var bmi = weight / (height / 100 * height / 100);
                var bmi_kat = '';
                var color = 'primary';

                if (bmi < 17) {
                    bmi_kat = 'Kekurangan berat badan tingkat berat';
                }
                if (bmi < 18.5 && bmi > 17) {
                    bmi_kat = 'Kekurangan berat badan tingkat ringan';
                }
                if (bmi < 25 && bmi >= 18.5) {
                    bmi_kat = 'Normal';
                }
                if (bmi < 27 && bmi >= 25) {
                    bmi_kat = 'Kelebihan berat badan tingkat ringan';
                }
                if (bmi >= 27) {
                    bmi_kat = 'Kelebihan berat badan tingkat berat';
                }

                $('#hasil').empty();
                $('#hasil').append("<span>" + bmi_kat + "</span>");

                $('#nilai').empty();
                $('#nilai').append("Nilai BMI anda adalah <b>" + bmi.toFixed(2) + "</b>");
                console.log(weight);
                console.log(height);
                console.log(bmi);
            });
        });
    </script>
@endpush
