@extends('frontend.layouts.app')

@section('title')
    <title>Kerja Sama Industri - Balai Diklat Industri Jakarta</title>
@endsection

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar Kerjasama Industri</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Daftar Kerjasama Industri</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

    
    <section class="inner-page">
      <div class="container">
        
          <div class="section-title" data-aos="fade-up">
            <h2>Daftar Kerjasama Industri</h2>
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
                                        class="form-control rounded" id="searchKey"
                                        onchange="sendRequest();">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <select name="year" class="form-control rounded" id="year"
                                        onchange="sendRequest();">
                                        <optgroup label="Pilih Tahun:">
                                            <option value="">---Semua Tahun---</option>
                                            <option value="2023" selected="">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="0000">0000</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <select class="form-control rounded" id="limitRows"
                                        onchange="sendRequest();">
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="table" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Perusahaan</th>
                                <th>Lokasi</th>
                                <th>Tahun Kerjasama</th>
                                <th>Bidang</th>
                            </tr>
                        </thead>

                        <tbody>

                                <tr data-status="active">
                                <td>1</td>
                                <td>CMS 67 Motor</td>
                                <td>Tasikmalaya</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                        

                              <tr data-status="active">
                                <td>2</td>
                                <td>GMS 069 Racing Team</td>
                                <td>Tasikmalaya</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                      
                            <tr data-status="active">
                                <td>3</td>
                                <td>Zidan Motor</td>
                                <td>Ciamis</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>

                           <tr data-status="active">
                                <td>4</td>
                                <td>PT Noor Amara Garmindo</td>
                                <td>Pemalang</td>
                                <td>2022</td>
                                <td>TPT</td>
                            </tr>

                             <tr data-status="active">
                                <td>5</td>
                                <td>PT Jaya Perkasa Textile</td>
                                <td>Sukoharjo</td>
                                <td>2022</td>
                                <td>TPT</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>6</td>
                                <td>PT Pura Barutama</td>
                                <td>Kudus</td>
                                <td>2022</td>
                                <td>Logam</td>
                            </tr>

                              <tr data-status="active">
                                <td>7</td>
                                <td>CV Maju Jaya Karoseri</td>
                                <td>Semarang</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>8</td>
                                <td>PT Nusantara Building Industries</td>
                                <td>Demak</td>
                                <td>2022</td>
                                <td>Logam</td>
                            </tr>
                
                            <tr data-status="active">
                                <td>9</td>
                                <td>CV Laksana Karoseri</td>
                                <td>Semarang</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>10</td>
                                <td>PT Manggala Jaya Garment</td>
                                <td>Cilacap</td>
                                <td>2022</td>
                                <td>TPT</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>11</td>
                                <td>PT Putra Rhodas Mandiri</td>
                                <td>Sukabumi</td>
                                <td>2022</td>
                                <td>Logam</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>12</td>
                                <td>Feather Ink Indonesia</td>
                                <td>Jakarta</td>
                                <td>2022</td>
                                <td>Logam</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>13</td>
                                <td>Rumah Batik Temanggung</td>
                                <td>Temanggung</td>
                                <td>2022</td>
                                <td>TPT</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>14</td>
                                <td>Batik Tinular Sih</td>
                                <td>Temanggung</td>
                                <td>2022</td>
                                <td>TPT</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>15</td>
                                <td>Bambang Bengkel</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>16</td>
                                <td>Home Speed</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>17</td>
                                <td>Bengkel Naira & Nabira</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>18</td>
                                <td>Andir Jaya Motor</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>19</td>
                                <td>Art Speed</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>20</td>
                                <td>Rai Raka Kinay</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>21</td>
                                <td>Daya Adicipta Motora</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>22</td>
                                <td>CV Prima Mandiri Motor</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>23</td>
                                <td>Tunas Cemara Motor</td>
                                <td>Bandung</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>24</td>
                                <td>Prima Graha Motor</td>
                                <td>Tasikmalaya</td>
                                <td>2022</td>
                                <td>Otomotif</td>
                            </tr>
                            
                            <tr data-status="active">
                                <td>25</td>
                                <td>PT Agung Jaya Bersama</td>
                                <td>Tasikmalaya</td>
                                <td>2022</td>
                                <td>Otomotif</td>
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
