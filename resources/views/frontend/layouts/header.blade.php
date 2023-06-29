<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('img/logokemnperin.png') }}"
                    alt="alternative"></a>
            <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('img/logobdi.png') }}"
                    alt="alternative"></a>
            <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('img/corpu.png') }}"
                    alt="alternative"></a>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#services">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#services">Profil</a></li>
                <li><a class="nav-link scrollto " href="{{ route('home') }}#portfolio">Galeri</a></li>
                <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route("diklat3in1") }}">Diklat 3in1</a></li>
                        <li><a href="{{ route("inkubatorbisnis") }}">Inkubator Bisnis</a></li>
                        <li><a href="https://iecbdijakarta.com/">IEC - BDI Jakarta</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route("strukturorganisasi") }}">Struktur Organisasi</a></li>
                        <li><a href="{{ route("dokumenpublik") }}">Dokumen Publik</a></li>
                        <li><a href="{{ route("kerjasamaindustri") }}">Daftar Kerjasama Industri</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Zona Integritas</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route("spanlapor") }}">SP4N LAPOR</a></li>
                        <li><a href="{{ route("maklumatpelayananpublik") }}">Maklumat Pelayanan Publik</a></li>
                        <li><a href="{{ route("laporgratifikasi") }}">Pelaporan Gratifikasi</a></li>
                        <li><a href="{{ route("wbs") }}">Whistle Blowing System</a>
                        <li><a href="{{ route("pengaduan") }}">Pengaduan Masyarakat</a>
                        <li><a href="{{ route("surveypresensikorupsi") }}">Survei Presepsi Korupsi</a>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Sistem Informasi</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="https://192-168-1-195.datacenterbdijakarta.direct.quickconnect.to:5001/">Data
                                Center</a></li>
                        <li><a href="">Aplikasi Android Smart BDI Jakarta</a></li>
                        <li><a href="{{ route("privacypolicy") }}">Privacy Policy</a></li>
                        <li><a href="{{ route("hapusakun") }}">Ketentuan Hapus Akun Pengguna Aplikasi</a></li>
                    </ul>
                </li>
                <li><a class="getstarted scrollto" href="https://sidia.kemenperin.go.id/admin.php">Login SIDIA</a>
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->