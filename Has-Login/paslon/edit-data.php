<?php
    session_start();
    include "../../config/koneksi.php";
    header("X-XSS-Protection: 1; mode=block");

    if (isset($_SESSION['npm'])) {
    
    } else {
      echo "<script>alert('Login Dulu ya'); 
      location.href='../../login-form.php';</script>";
    }

    $npm = $_GET['npm'];

    $sqlselectdatas = mysqli_query($con, " SELECT pas_berkas.*, pas_datas.* 
                                           FROM pas_datas
                                           JOIN pas_berkas ON pas_datas.npm = pas_berkas.npm
                                           WHERE pas_datas.npm = '$npm' ");

    while($datas = mysqli_fetch_array($sqlselectdatas)){
        $ketum = $datas['ketum'];
        $waketum = $datas['waketum'];
        $foto = $datas['fotbar'];
        $visi = $datas['visi'];
        $misi = $datas['misi'];
    }
    
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
            <li class="nav-item">
                <a class="nav-link" href="berkas.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Berkas</span></a>
            </li>
            <hr class="sidebar-divider mb-0">

            <li class="nav-item">
                <a class="nav-link" href="config/logout.php">
                    <i class="fa fa-fw fa-sign-out"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-4">
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
                    
                    <form action="config/vismis-upload.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="card col-12 mb-3 mt-3 py-3">
                                <h5 class="card-title">Data Pasangan Calon</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="npm" class="form-control"
                                            value="<?php echo $_SESSION['npm']; ?>" hidden>
                                        <input type="text" name="ketum" class="form-control" value="<?php echo $ketum; ?>">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="waketum" class="form-control"
                                            value="<?php echo $waketum; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="card col-12 mb-3 mt-2">
                                <div class="card-body">
                                    <h5 class="card-title">Tuliskan Visi kalian disini</h5>
                                    <textarea name="visi" class="w-100" style="height: 100px;"><?php echo $visi; ?></textarea>
                                </div>
                            </div>

                            <div class="card col-12">
                                <div class="card-body">
                                    <h5 class="card-title">Tuliskan Misi kalian disini</h5>
                                    <textarea name="misi" class="w-100" style="height: 250px; "><?php echo $misi; ?></textarea>
                                    <h6>catatan : <br>
                                        - Misi 1
                                        <br>
                                        &lt;br&gt;
                                        <br>
                                        - Misi 2
                                    </h6>
                                    <hr>
                                    <h6>Gunakan tag &lt;br&gt; Untuk memisahkan per point </h6>
                                </div>
                            </div>

                            <button name="submit" type="submit"
                                class="btn btn-primary col-6 mt-4 mb-4 ml-auto">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

</body>

</html>