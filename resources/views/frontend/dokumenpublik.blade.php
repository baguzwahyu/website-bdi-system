@extends('frontend.layouts.app')

@section('title')
    <title>Dokumen Publik - Balai Diklat Industri Jakarta</title>
@endsection

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Dokumen Publik</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Dokumen Publik</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs Section -->


    <section class="inner-page">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Dokumen Publik</h2>
                <p>Balai Diklat Industri Jakarta</p>
            </div>

            <div class="text-container">

                <body>
                    <div class="table-wrapper">
                        <div class="well-filter">
                            <div class="row form-filter">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" id="searchFor" onkeyup="myFunction()" placeholder="Search..."
                                            class="form-control rounded" id="searchKey" onchange="sendRequest();">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="table" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Dokumen</th>
                                    <th>Tahun</th>
                                    <th>Download&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr data-status="active">
                                    <td>1</td>
                                    <td>RENSTRA</td>
                                    <td>2022</td>
                                    <td><a class="btn btn-primary btn-sm"
                                            href="https://drive.google.com/file/d/1JEzka0ITYivHNw_upWy75OifAXKnxtFQ/view?usp=sharing">View</a>
                                    </td>
                                </tr>
                            </tbody>

                            <tr data-status="active">
                                <td>2</td>
                                <td>LAKIP</td>
                                <td>2022</td>
                                <td><a class="btn btn-primary btn-sm"
                                        href="https://drive.google.com/file/d/1KROjXTspMgjnTriO8lMaw4DyAsIC6NzE/view?usp=sharing">View</a>
                                </td>
                            </tr>
                            </tbody>

                            <tr data-status="active">
                                <td>3</td>
                                <td>RENKIN</td>
                                <td>2022</td>
                                <td><a class="btn btn-primary btn-sm"
                                        href="https://drive.google.com/file/d/1pyyNWc4dvKKTh09c-L4nRwEYDrybC6QJ/view?usp=sharing">View</a>
                                </td>
                            </tr>

                            <tr data-status="active">
                                <td>4</td>
                                <td>PERKIN</td>
                                <td>2022</td>
                                <td><a class="btn btn-primary btn-sm"
                                        href="https://drive.google.com/file/d/1bw_stBkkw9CoqDyKljOmaGcBQAVFIyJg/view?usp=sharing">View</a>
                                </td>
                            </tr>

                            <tr data-status="active">
                                <td>5</td>
                                <td>LAPORAN PPID</td>
                                <td>2022</td>
                                <td><a class="btn btn-primary btn-sm"
                                        href="https://drive.google.com/file/d/1yayl5szdauUmN_GHmr-S1VsumV7XVTpL/view?usp=sharing">View</a>
                                </td>
                            </tr>

                            <tr data-status="active">
                                <td>6</td>
                                <td>Catalog Inkubator Bisnis</td>
                                <td>2020</td>
                                <td><a class="btn btn-primary btn-sm" href="https://anyflip.com/cqrlf/xnqv/">View</a></td>
                            </tr>

                            <tr data-status="active">
                                <td>7</td>
                                <td>Catalog Inkubator Bisnis</td>
                                <td>2021</td>
                                <td><a class="btn btn-primary btn-sm" href="https://anyflip.com/cqrlf/cnpt/">View</a></td>
                            </tr>



                            </tbody>

                        </table>
                    </div>
                </body>
            </div>
            <!-- end of text-container -->
            <script>
                function myFunction() {
                    // Declare variables
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("searchFor");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("table");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>
        </div>
    </section>
@endsection
