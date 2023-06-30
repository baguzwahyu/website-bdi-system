@extends('frontend.layouts.app')

@section('title')
    <title>Pengaduan Masyarakat - Balai Diklat Industri Jakarta</title>
@endsection

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Pengaduan Masyarakat</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Pengaduan Masyarakat</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs Section -->


    <section class="inner-page">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Pengaduan Masyarakat</h2>
                <p>Balai DIklat Industri Jakarta</p>
            </div>

            <iframe
                src="https://docs.google.com/forms/d/e/1FAIpQLSc-gUjEW_bmaw7oRsLjNNohCQRqsRmBhM7Z6d5EH_kuScz_7Q/viewform?embedded=true"
                width="600" height="1386" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

        </div>
    </section>
@endsection
