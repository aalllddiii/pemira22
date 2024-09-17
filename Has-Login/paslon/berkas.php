<?php
    
    session_start();
    include "../../config/koneksi.php";
    header("X-XSS-Protection: 1; mode=block");

    if (isset($_SESSION['npm'])) {
    
    }else{
      echo "<script>alert('Login Dulu ya'); 
      location.href='../../login-form.php';</script>";
    }

    $sqlselect = mysqli_query($con, "SELECT * FROM pas_berkas WHERE npm = '$_SESSION[npm]' ");
    $sqlselectdatas = mysqli_query($con, "SELECT * FROM pas_datas WHERE npm = '$_SESSION[npm]' ");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PASLON</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/images/LOGO3.png" rel="icon">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">PASLON</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="berkas.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Berkas</span></a>
            </li>
            <hr class="sidebar-divider mb-0">
            <?php
                            
                while($datas = mysqli_fetch_array($sqlselectdatas)){
                    $ketum = $datas['ketum'];
                    $waketum = $datas['waketum'];
                    $fotbar = $datas['fotbar'];
                    $visi = $datas['visi'];
                    $misi = $datas['misi'];
                    if ($ketum != NULL) { ?>
            <?php } if($waketum != NULL) { ?>
            <?php } if($fotbar != NULL){ ?>
            <?php } if($visi != NULL){ ?>
            <?php } if($misi != NULL){ ?>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="vismis.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Paslon</span></a>
            </li>
            <?php } ?>
            <!-- Content Row -->
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link" href="config/logout.php">
                    <i class="fa fa-fw fa-sign-out"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline ">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h5 class="text-primary">Selamat Datang Calon Ketua Umum & Wakil Ketua Umum BEM FIKTI UG 2022-2023</h5>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Content Row -->

                    <div class="card mb-3">

                        <div class="card-body">
                            <h5 class="font-weight-bold card-title">Persyaratan administratif :</h5>
                            <ol>
                                <li>Terdaftar sebagai mahasiswa aktif jurusan Sistem Informasi atau Sistem Komputer Universitas Gunadarma tahun akademik 2021/2022.</li>
                                <li>Telah menyelesaikan paling sedikit 80 sks dengan IPK terakhir ≥ 3.00 dibuktikan dengan DNS dan DNU terbaru.</li>
                                <li>Sanggup melaksanakan tugas secara penuh selama masa kepengurusannya.</li>
                                <li>Menyerahkan Grand Design kepada panitia pemilihan.</li>
                                <li>Mengisi formulir pendaftaran.</li>
                                <li>Wajib patuh terhadap tata tertib PEMIRA BEM FIKTI UG.</li>
                                <li>Tidak akan melakukan tindak kriminal selama menjabat sebagai Ketua Umum dan Wakil Ketua Umum BEM FIKTI UG.</li>
                            </ol>
                        </div>
                    </div>

                    <div class="card">

                        <div class="card-body">
                            <h5 class="font-weight-bold card-title">Berkas-berkas yang dilampirkan:</h5>
                            <ul>
                                <li>
                                    Formulir pendaftaran <a href="./assets/Formulir-Pendaftaran-PEMIRA-2022.pdf" target="__blank">(link download)</a>, 
                                    surat pernyataan patuh tata tertib <a href="./assets/TATA-TERTIB-PEMIRA-FIKTI-UG-2022.pdf" target="__blank">(link download)</a>, 
                                    dan surat pernyataan tindak kriminal.* 
                                    <input type="checkbox" class="float-right" id="s_item1"></li>
                                </li>
                                <li>
                                    CV <span class="font-italic">(Curriculum Vitae)</span>. (PDF)* 
                                    <input type="checkbox" class="float-right" id="s_item2">
                                </li>
                                <li>
                                    Fotocopy KTP & KRS aktif semester 6. (PNG)* 
                                    <input type="checkbox" class="float-right" id="s_item3">
                                </li>
                                <li>
                                    Rangkuman nilai DNS dan DNU (terbaru). (PDF)
                                    <input type="checkbox" class="float-right" id="s_item4">
                                </li>
                                <li>
                                    Melampirkan Grand Design yang terdiri atas: (PDF) 
                                    <input type="checkbox" class="float-right" id="s_item5">
                                </li>
                                    <ul>
                                        <li>Nama pasangan calon Ketua Umum & Wakil Ketua Umum.</li>
                                        <li>Visi dan Misi pasangan calon Ketua Umum & Wakil Ketua Umum.</li>
                                        <li>Nilai organisasi.</li>
                                        <li>Budaya Kerja.</li>
                                        <li>Struktur organisasi disertai penjelasan secara rinci.</li>
                                        <li>Program kerja unggulan dan program kerja inovasi.</li>
                                        <li>Format File : Ukuran kertas A4 (GD_Nama Pasangan.pdf)</li>
                                        <li>Grand Design dibuat dengan tampilan semenarik mungkin.</li>
                                    </ul>
                                <li>
                                    Pas Foto berwarna menggunakan <span class="font-italic"> background </span> berwarna
                                    merah/biru dengan almamater Universitas Gunadarma ukuran 3x4 (2 lembar). (PNG)* 
                                    <input type="checkbox" class="float-right" id="s_item6">
                                </li>
                                <li>
                                    Melampirkan daftar nama tim sukses masing-masing calon. (PDF)* <a href="./assets/Form-Daftar-Nama-Tim-Sukses.pdf" target="__blank">(link download)</a>
                                    <input type="checkbox" class="float-right" id="s_item7">
                                </li>
                                <li>
                                    Melampirkan rancangan kegiatan kampanye. (PDF) 
                                    <input type="checkbox" class="float-right" id="s_item8">
                                </li>
                                <li>
                                    Memiliki minimal suara 25 mahasiswa FIKTI yang dibuktikan dengan melampirkan nama,
                                    NPM, dan tanda tangan.* <a href="./assets/Form-Dukungan-Mahasiswa-FIKTI.pdf" target="__blank">(link download)</a>
                                    <input type="checkbox" class="float-right" id="s_item9">
                                </li>
                            </ul>
                            <br>
                            Seluruh berkas di-scan dan dilampirkan pada website pendaftaran calon Ketua Umum
                            dan Wakil Ketua Umum BEM FIKTI UG Periode 2022/2023. <br>
                            Berkas dengan tanda tangan harus menggunakan <b>tanda tangan asli (basah)</b> dan <b>Berkas yang bertanda (*)</b> 
                            diserahkan dalam bentuk <b>hardcopy</b> ke panitia Pemira 2022 pada:
                            <br><br>
                            <b>Tanggal</b> : 1, 2, 4 Juli 2022 <br>
                            <b>Waktu</b> : 10.00 - 15.00 WIB <br>
                            <b>Tempat</b> : Pusgiwa kampus E Universitas Gunadarma <br>
                            <br>
                            Apabila peserta yang belum melampirkan berkas dengan lengkap hingga penutupan pendaftaran, 
                            maka peserta dianggap gugur dalam pencalonan ini. <br>
                            <a href="./assets/Persyaratan-Pendaftaran-PEMIRA-2022.pdf" target="__blank">(Link download Persyaratan Pendaftaran PEMIRA 2022)</a>
                        </div>
                    </div>

                    <div class="card mt-3 mb-4">
                        <div class="card-body">
                        <h5 class="font-weight-bold card-title">Berkas-berkas yang dilampirkan:</h5>
                        <h6 class="card-title ml-3">*Jadikan dalam 1 folder zip. (namapaslon.zip)</h6>
                            <?php
                            
                            while($datas = mysqli_fetch_array($sqlselect)){
                                $berkas = $datas['berkas'];
                                
                            ?>
                            <form class="ml-3" action="config/berkas-upload.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="npm" class="form-control"
                                        value="<?php echo $_SESSION['npm']; ?>" hidden>
                                    <!-- <label for="exampleFormControlFile1" class="font-weight-bold">Pengumpulan Berkas: </label> -->
                                    <input type="file" name="berkas" class="form-control-file">
                                </div>
                                Ini adalah berkas yang telah anda upload: <a
                                    href="<?php echo "assets/berkaspaslon/".$datas['berkas'] ?>" download>
                                    <?php echo $datas['berkas']; ?>
                                </a>
                                <br>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary col-6">Submit</button>
                            </form>
                            <a href="<?php echo "assets/berkaspaslon/".$datas['berkas'] ?>" download>

                                <?php } ?>
                        </div>
                    </div>
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->

                    </div>

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {

            var checkbox = document.querySelectorAll("input[type='checkbox']");

            for (var item of checkbox) {
                item.addEventListener("click", function () {
                    localStorage.s_item ? // verifico se existe localStorage
                        localStorage.s_item = localStorage.s_item.indexOf(this.id + ",") == -
                        1 // verifico de localStorage contém o id
                        ?
                        localStorage.s_item + this.id + "," // não existe. Adiciono a id no loaclStorage
                    :
                        localStorage.s_item.replace(this.id + ",", ""):
                        // já existe, apago do localStorage
                        localStorage.s_item = this.id + ","; // não existe. Crio com o id do checkbox
                });
            }

            if (localStorage.s_item) { // verifico se existe localStorage
                for (var item of checkbox) { // existe, percorro as checkbox
                    item.checked = localStorage.s_item.indexOf(item.id + ",") != -1 ? true:
                    false; // marco true nas ids que existem no localStorage
                }
            }
        });
    </script>

</body>

</html>