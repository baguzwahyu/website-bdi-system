@extends('frontend.layouts.app')

@section('title')
    <title>SPAN Lapor - Balai Diklat Industri Jakarta</title>
@endsection

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Span Lapor </h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>SP4N-LAPOR</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs Section -->


    <section class="inner-page">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Apa Itu SP4N Lapor ?</h2>
                <p>“Berani LAPOR! Untuk Pelayanan Publik yang Lebih Baik”</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/pVJlNv0Zgd0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>


            <P>Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola secara
                efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola pengaduan secara parsial dan
                tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi
                suatu pengaduan tidak ditangani oleh satupun organisasi penyelenggara, dengan alasan pengaduan bukan
                kewenangannya. Oleh karena itu, untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan
                sistem pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya,
                masyarakat memiliki satu saluran pengaduan secara Nasional.</p>
            Untuk itu Pemerintah Republik Indonesia membentuk Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional (SP4N)
            - Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah layanan penyampaian semua aspirasi dan pengaduan
            masyarakat Indonesia melalui beberapa kanal pengaduan yaitu website www.lapor.go.id, SMS 1708, twitter
            @lapor1708 dan aplikasi Android. Lembaga pengelola SP4N-LAPOR! adalah Kementerian Pendayagunaan Aparatur Negara
            dan Reformasi Birokrasi (Kementerian PANRB) sebagai Pembina Pelayanan Publik, Kantor Staf Presiden (KSP) sebagai
            Pengawas Program Prioritas Nasional dan Ombudsman Republik Indonesia sebagai Pengawas Pelayanan Publik.
            LAPOR! telah ditetapkan sebagai Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional (SP4N) berdasarkan
            Peraturan Presiden Nomor 76 Tahun 2013 dan Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi
            Birokrasi Nomor 3 Tahun 2015.</P>

            <p>SP4N-LAPOR! dibentuk untuk merealisasikan kebijakan “no wrong door policy” yang menjamin hak masyarakat agar
                pengaduan dari manapun dan jenis apapun akan disalurkan kepada penyelenggara pelayanan publik yang berwenang
                menanganinya. SP4N bertujuan agar:</p>
            <li>Penyelenggara dapat mengelola pengaduan dari masyarakat secara sederhana, cepat, tepat, tuntas, dan
                terkoordinasi dengan baik;</li>
            <li>Penyelenggara memberikan akses untuk partisipasi masyarakat dalam menyampaikan pengaduan; dan</li>
            <li>Meningkatkan kualitas pelayanan publik.</li>

            <P>Jika anda terpaksa menerima, misalnya pemberian tersebut terlanjur disampaikan melalui orang terdekat anda
                (suami, istri, anak, dan lain-lain) atau ada perasaan tidak enak karena dapat menyinggung pemberi,
                maka sebaiknya hal tersebut segera dilaporkan kepada Unit Pengelola Gratifikasi Kementerian Perindustrian
                secara online.</P>

        </div>

        <section id="services" class="services">

            <div class="container">
                <a class="btn btn-danger" href="https://www.lapor.go.id/instansi/kementerian-perindustrian">Ajukan
                    Laporan</a>
            </div>
        </section>
    </section>
@endsection
