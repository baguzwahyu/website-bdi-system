@extends('frontend.layouts.app')

@section('title')
    <title>Home - Balai Diklat Industri Jakarta</title>
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="home" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang </h1>
                    <h1 data-aos="fade-up">di Wilayah Zona Integritas </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Balai Diklat Industri Jakarta - Kementerian
                        Perindustrian R.I </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="https://sidia.kemenperin.go.id/register" class="btn-get-started scrollto">Pendaftaran
                            Peserta Diklat</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('img/benner.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
        <div class="container">
            <div class="row">

                <marquee behavior="scroll" direction="left" id="moving-text">- Selamat Datang Di Zona Integritas
                    Balai Diklat Industri Jakarta, Wilayah Bebas Korupsi (WBK) - Wilayah Birokrasi Bersih Dan
                    Melayani (WBBM) -</marquee>

            </div>
        </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <section id="services" class="services">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Profil</h2>
                        <p>Visi Balai Diklat Industri Jakarta tidak dapat dilepaskan dari visi Pusdiklat Industri
                            selaku organisasi yang membawahi Balai Diklat Industri Jakarta.
                            Sehubungan dengan program reposisi, Pusdiklat Industri telah mencanangkan visi yaitu
                            “Menjadi Lembaga Pendidikan dan Pelatihan di Bidang Industri yang Unggul,
                            Berbasis Kompetensi dan Berdaya Saing pada Tahun 2025”. </p>
                    </div>

                    <div class="row">

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bx bxs-extension"></i></div>
                                <h4 class="title"><a href="">Diklat 3IN1 Berbasis Kompetensi</a></h4>
                                <p class="description">Peserta Dilatih, Disertifikasi dan Langsung di tempatkan
                                    bekerja di Industri</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="bx bxs-store"></i></div>
                                <h4 class="title"><a href="inkubatorbisnis.html">Inkubator Bisnis</a></h4>
                                <p class="description">Inkubator Bisnis MAJU - BDI JAKARTA mencetak industri
                                    wirausaha baru</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon"><i class="bx bxs-phone"></i></div>
                                <h4 class="title"><a href="">Informasi Pelayanan Publik (PPID)</a></h4>
                                <p class="description">Layanan dalam keterbukaan informasi Publik Oleh pejabat
                                    Pengelola Informasi dan Dokumentasi (PPID)</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon"><i class="bi bi-browser-edge"></i></div>
                                <h4 class="title"><a href="https://iecbdijakarta.com/">IEC - BDI Jakarta</a></h4>
                                <p class="description">Layanan Portal ICE adalah Portal Ekosistem Berbaasis Webiste
                                    yang bertujuan sebagai sarana penghubung antar pengusaha dan konsumen agar lebih
                                    terbentuk Network Ekosistem yang saling mendukung.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <div class="row content">
                <div class="col-lg-15" data-aos="fade-up" data-aos-delay="150">
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->

    <!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card" style='background-image: url("{{ asset('img/') }}/diklat3in1.jpg");' data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="https://sidia.kemenperin.go.id/register/agency">Diklat
                                    3 IN 1</a></h5>
                            <div class="read-more"><a href="https://sidia.kemenperin.go.id/register/agency"><i
                                        class="bi bi-arrow-right"></i> Pendaftaran</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="card" style='background-image: url("{{ asset('img/') }}/inkubatorbisnis.jpg");' data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="card-title"><a
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSfJrfo8zXr9hJHnbyn2wCbGW00NPqG-iUTFDE54GrQV2lZ6dQ/viewform">Inkubator
                                    Bisnis "MAJU"</a></h5>
                            <div class="read-more"><a
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSfJrfo8zXr9hJHnbyn2wCbGW00NPqG-iUTFDE54GrQV2lZ6dQ/viewform"><i
                                        class="bi bi-arrow-right"></i> Pendaftaran</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style='background-image: url("assets/img/lsp.jpg");' data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="card-body">
                            <h5 class="card-title"><a href="https://bnsp.go.id/detaillsp.php?id=310">Lembaga
                                    Sertifikasi Profesi</a></h5>
                            <div class="read-more"><a href="https://bnsp.go.id/detaillsp.php?id=310"><i
                                        class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style='background-image: url("assets/img/ppid.jpg");' data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="card-title"><a href="ppid.html">PPID BDI JAKARTA</a></h5>
                            <div class="read-more"><a href="ppid.html"><i class="bi bi-arrow-right"></i> Read
                                    More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End More Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <section id="services" class="services">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Zona Integritas</h2>
                    </div>
                    <div class="row">


                        <div class="text-container">
                            <img class="img-fluid" src="assets/img/zi3.png" alt="alternative">
                        </div>


                        <div class="container-fluid mt-3">
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon"><i class="bx bxs-extension"></i></div>
                                <h4 class="title"><a href="https://bdijakarta.id/pelaporangratifikasi.html">Pelapor
                                        Gratifikasi</a></h4>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="bx bxs-extension"></i></div>
                                <h4 class="title"><a href="https://bdijakarta.id/wbs.html">Whistleblowing
                                        System</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="bx bxs-extension"></i></div>
                                <h4 class="title"><a href="https://bdijakarta.id/pengaduanmasyarakat.html">Pengaduan
                                        Masyarakat</a></h4>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon"><i class="bx bxs-extension"></i></div>
                                <h4 class="title"><a href="https://bdijakarta.id/surveipresepsikorupsi.html">Survei
                                        Presepsi
                                        Korupsi</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row content">
                <div class="col-lg-15" data-aos="fade-up" data-aos-delay="150">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Galeri Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Galeri</h2>
                <p>Balai Diklat Industri Jakarta</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-Fasilitas">Fasilitas</li>
                        <li data-filter=".filter-inkubator">Inkubator Bisnis</li>
                        <li data-filter=".filter-diklat">Diklat 3 IN 1</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                    <div class="portfolio-wrap">
                        <img src="assets/img/fasilitas1.jpg"class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Workshop Menjahit</h4>
                            <p>Workshop Menjahit</p>
                            <div class="portfolio-links">
                                <a href="assets/img/fasilitas1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                    <div class="portfolio-wrap">
                        <img src="assets/img/fasilitas2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ruang Kelas Utama</h4>
                            <p>Ruang Kelas Utama</p>
                            <div class="portfolio-links">
                                <a href="assets/img/fasilitas2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                    <div class="portfolio-wrap">
                        <img src="assets/img/fasilitas3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PPID Asrama Peserta Diklat</h4>
                            <p>PPID Asrama Peserta Diklat</p>
                            <div class="portfolio-links">
                                <a href="assets/img/fasilitas3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                    <div class="portfolio-wrap">
                        <img src="assets/img/fasilitas4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Area PPID Gedung Office</h4>
                            <p>Area PPID Gedung Office</p>
                            <div class="portfolio-links">
                                <a href="assets/img/fasilitas4.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                    <div class="portfolio-wrap">
                        <img src="assets/img/fasilitas5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>PPID Gedung Office</h4>
                            <p>PPID Gedung Office</p>
                            <div class="portfolio-links">
                                <a href="assets/img/fasilitas5.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                    <div class="portfolio-wrap">
                        <img src="assets/img/fasilitas6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wifi Corner</h4>
                            <p>Wifi Corner</p>
                            <div class="portfolio-links">
                                <a href="assets/img/fasilitas6.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                    <div class="portfolio-wrap">
                        <img src="assets/img/fasilitas7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Asrama Aparatur</h4>
                            <p>Asrama Aparatur</p>
                            <div class="portfolio-links">
                                <a href="assets/img/fasilitas7.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                        <div class="portfolio-wrap">
                            <img src="assets/img/fasilitas8.jpg"class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Asrama Peserta Diklat</h4>
                                <p>Asrama Peserta Diklat</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/fasilitas8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                        <div class="portfolio-wrap">
                            <img src="assets/img/fasilitas9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Musolah</h4>
                                <p>Musolah</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/fasilitas9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                        <div class="portfolio-wrap">
                            <img src="assets/img/fasilitas10.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Ruang Pengaduan</h4>
                                <p>Ruang Pengaduan</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/fasilitas10.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                        <div class="portfolio-wrap">
                            <img src="assets/img/fasilitas11.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Ruang Sablon</h4>
                                <p>Ruang Sablon</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/fasilitas11.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                        <div class="portfolio-wrap">
                            <img src="assets/img/fasilitas12.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Ruangang Multimedia</h4>
                                <p>Ruangan Multimedia</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/fasilitas12.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-Fasilitas">
                        <div class="portfolio-wrap">
                            <img src="assets/img/fasilitas14.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Area Berolahraga</h4>
                                <p>Area Berolahraga</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/fasilitas14.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri.os1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Diklat 3IN1 Operator Sewing</h4>
                                <p>Diklat 3IN1 Operator Sewing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri.os1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/1. GALLERY_OS-04.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Diklat 3IN1 Operator Sewing</h4>
                                <p>Diklat 3IN1 Operator Sewing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/1. GALLERY_OS-04.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/1. GALLERY_OS-06.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Operator Sewing</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/1. GALLERY_OS-06.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/2. GALLERY_Peleburan Logam-07.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Peleburan Logam</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/2. GALLERY_Peleburan Logam-07.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/2. GALLERY_Peleburan Logam-08.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Peleburan Logam</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/2. GALLERY_Peleburan Logam-08.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/3. GALLERY_dumptruck-01.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Dumptruck</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/3. GALLERY_dumptruck-01.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/3. GALLERY_dumptruck-02.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Dumptruck</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/3. GALLERY_dumptruck-02.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/3. GALLERY_dumptruck-03.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Dumptruck</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/3. GALLERY_dumptruck-03.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/4. GALLERY_Forklift-09.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Forklift</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/4. GALLERY_Forklift-09.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/4. GALLERY_Forklift-10.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Forklift</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/4. GALLERY_Forklift-10.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-diklat">
                        <div class="portfolio-wrap">
                            <img src="assets/img/4. GALLERY_Forklift-11.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>DIKLAT 3IN1 - Forklift</h4>
                                <div class="portfolio-links">
                                    <a href="assets/img/4. GALLERY_Forklift-11.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Uji Validasi Produk Tahap 1</h4>
                                <p>Uji Validasi Produk Tahap 1</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Uji Validasi Produk Tahap 1</h4>
                                <p>Uji Validasi Produk Tahap 1</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Produksi Inwall Membatik Tulis</h4>
                                <p>Produksi Inwall Membatik Tulis</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Brandstoming Bersama Mentor</h4>
                                <p>Brandstroming Bersama Mentor</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Forum Diskusi Penyampaian Idea Bisnis</h4>
                                <p>Forum Diskusi Penyampaian Idea Bisnis</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Forum Diskusi bersama Coaching</h4>
                                <p>Forum Diskusi bersama Coaching</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Materi - Photo Produk</h4>
                                <p>Materi - photo Produk</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-inkubator">
                        <div class="portfolio-wrap">
                            <img src="assets/img/inbis8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Materi - Sosial Media Marketing</h4>
                                <p>Materi - Sosial Media Marketing</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/inbis8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Apa yang dimaksud dengan Diklat 3IN1 ?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Diklat 3IN1 merupakan pelatihan, sertifikasi dan penempatan kerja yang memiliki tujuan untuk
                        menciptakan sumber daya manusia industri yang memiliki kompetensi dan karakter yang unggul.
                    </p>
                </div>
            </div>
            <!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Balai Diklat Industri Jakarta menyelenggarakan diklat apa saja ?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Operator Sewing, Otomotif, Operator Tekstil, Pengelasan dan Batik
                    </p>
                </div>
            </div>
            <!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Bagaimana cara untuk mendaftar Diklat 3IN1 ?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Masuk ke halaman https://sidia.kemenperin.go.id/ kemudian login sebagai peserta diklat dan
                        pilih diklat yang ingin diikuti.
                    </p>
                </div>
            </div>
            <!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Apa itu Inkubator Bisnis ?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Program BDI Jakarta tentang pengembangan wirausaha industri yang bertujuan untuk menciptakan
                        dan mengembangkan usaha baru yang mempunyai nilai ekonomi dan berdaya saing tinggi,
                        berkarakter, bermental kewirausahaan, serta berkompetensi dibidang usahanya.
                    </p>
                </div>
            </div>
            <!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Bagaimana cara untuk mendaftar Inkubator Bisnis ?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Masuk ke menu Program - Inkubatorbisnis dan pilih Pendaftaran Inkubator Bisnis. Kemudian
                        akan diarahkan ke Google Form untuk pengisian pendaftaran.
                    </p>
                </div>
            </div>
            <!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="600">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Apa Benefit dari Inkubator Bisnis ?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        1. Tidak dipungut biaya selama pelaksanaan Inkubator Bisnis.<br>
                        2. Mendapatkan materi dan bimbingan selama masa inkubasi, diantaranya : Pemasaran,
                        Pengelolaan Keuangan, Branding, Pengembangan Usaha, Akses Pasar, Manajemen atas HKI dan
                        lain-lain.<br>
                        3. Berkesempatan mengembangkan usaha.
                    </p>
                </div>
            </div>
            <!-- End F.A.Q Item-->

        </div>
    </section>
    <!-- End F.A.Q Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Peserta Diklat 3IN1 & Inkubator Bisnis</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Donni..png" class="testimonial-img" alt="">
                                <h3>Donni</h3>
                                <h4>Tenant Inkubator Bisnis Tahun 2022 </h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Dengan adanya program inkubator bisnis ini kami diberikan kesempatan untuk
                                    belajar bagaimana menjalankan bisnis secara detail dan terperinci langsung
                                    dengan mentor dan praktisi yang expert di bidangnya masing masing.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <h3>Nissa Jaya</h3>
                                <h4>Peserta DIklat 3IN1</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Balai Diklat industri TPT/ tekstil dan produk tekstil. Menyelenggarakan Diklat
                                    3:1 baik insite atau on-site. Memberikan pelatihan jahit menjahit sampai
                                    ditempatkan di industri garmen
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Sutisna.png" class="testimonial-img" alt="">
                                <h3>Sutisna</h3>
                                <h4>Tenant Inkubator Bisnis Tahun 2022 - Harco Batik</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Setelah mengikuti program incubator bisnis di BDI nJakarta banyak perkembangan
                                    yang terjadi di usaha saya ini. Karena di sini kita belajar pewarnaan alam,
                                    tentu produk yang dihasilkan juga semakin baik dan dari sisi bisnis dan
                                    pemasarannya kita selalu didampingi oleh mentor dan coach yang ahli di bidangnya
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <h3>Riki</h3>
                                <h4>Peserta Diklat 3IN1</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Mantap Banget. Kalo misal bisa 2×, saya ingin ikutan lagi. 20 hari yang sangat
                                    bermanfaat, bukan hanya diajarkan bagaimana cara menjahit. Tapi diajarkan juga
                                    kedisiplinan. Hebat
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <h3>Alma Alamiyah</h3>
                                <h4>Peserta Diklat 3IN1</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Balai diklat ini membuat saya bisa menjahit dari nol sampai akhirnya bisa bikin
                                    segala macam baju,,bukan hanya pelajaran dan prakteknya yang mantap bahkan
                                    fasilitas yang tersedia membuat kita nyaman
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->
@endsection
