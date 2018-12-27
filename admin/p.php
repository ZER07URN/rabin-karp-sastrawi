<?php 
include"../config/koneksi.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
<link rel="stylesheet" href="css/lib/html5-editor/bootstrap-wysihtml5.css" />
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
  
        <!-- End header header -->
        <!-- Left Sidebar  -->
    
        <div >
            <!-- Bread crumb -->
           
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
 
<div class="card card-outline-success">
                            <div class="card-header">
                            <h2 class="m-b-0 text-white text-center">Hasil Cek Tingkat Plagiarisme</h2>
                            </div>
                            <div class="card-body">
                                
<!--form>
                                <form action="#" class="form-horizontal">
                                    <div class="form-body">
                                      
                                        <hr class="m-t-0 m-b-40">
                                   
                                          
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Judul skripsi</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" placeholder="Judul">
                                                        </div>
                                                </div><div class="form-group row">
                                                    <label class="control-label text-left col-md-2">Abstraksi skripsi</label>
                                                    <div class="col-md-10">
                                                        <textarea class="textarea_editor form-control" rows="15" placeholder="abstraksi skripsi" style="height:300px"></textarea>
                                                        </div>
                                                </div>
                                
                                    
                                    
                                       
                                    
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-info">Proses</button>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                                
-->
                    
                                
                                          <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>no</th>
        <th style="text-align:center">judul skripsi</th>
        <th style="text-align:center">Tingkat Plarigarisme</th>
      

                                            </tr>
                                        </thead>
                                        <tbody>
   
   
<tr> <td>1. </td><td style="text-align:left">SISTEM INFORMASI PELAYANAN DONOR DARAH BERBASIS WEB(STUDI KASUS: PMI TASIKMALAYA)</td>
<td style="text-align:center">97.38 %</td></tr>
                                          <tr> <td>2. </td><td style="text-align:left">AUDIT TATA KELOLA SISTEM INFORMASI MENGGUNAKAN KERANGKA KERJA CONTROL OBJECTIVE FOR INFORMATION AND RELATED TECHNOLOGY(COBIT)</td>
<td style="text-align:center">39.75 %</td></tr>

<tr> <td>3. </td><td style="text-align:left">PERANCANGAN SISTEM INFORMASI DAFTAR OBAT DAN DOKTER BERBASIS WEB PADA APOTEK DUTA ESA FARMA BEKASI</td>
<td style="text-align:center">29.65 %</td></tr>

<tr> <td>4. </td><td style="text-align:left">SISTEM INFORMASI ADMINISTRASI TERINTEGRASI DENGAN LOCAL AREA NETWORK PADA DIVISI PERTAMBANGAN CV. PUTRA MANDIRI MENGGUNAKAN JAVA</td>
<td style="text-align:center">30.63 %</td></tr>

<tr> <td>5. </td><td style="text-align:left">PERANCANGAN SISTEM INFORMASI DAFTAR OBAT DAN DOKTER BERBASIS WEB PADA APOTEK DUTA ESA FARMA BEKASI</td>
<td style="text-align:center">28.64 %</td></tr>
                                     
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>       
             
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    
      <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
    
    
     <script src="js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="js/lib/html5-editor/wysihtml5-init.js"></script>
    <!--Custom JavaScript -->

</body>

</html>